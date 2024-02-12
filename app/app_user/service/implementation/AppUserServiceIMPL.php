<?php

namespace App\app_user\service\implementation\AppUserServiceImpl;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\app_user\DTO\Requests\AppUserRequest;
use App\app_user\DTO\Response\AppUserResponse;
use Illuminate\Validation\ValidationException;
use app\app_user\data\repository\AppUserRepository;
use app\app_user\service\interfaces\AppUserService;

class AppUserServiceImpl implements AppUserService
{
    protected AppUserRepository $appUserRepository;

    public function __construct(AppUserRepository $appUserRepository)
    {
        $this->appUserRepository = $appUserRepository;
    }

    public function createAppUser(AppUserRequest $appUserRequest): AppUserResponse
    {
        $rules = [
            'email' => 'required|email|unique:app_users,email',
            'phoneNumber' => 'required|string|min:9|max:15|unique:app_users,phoneNumber',
            'password' => 'required|string|min:6|not_contains: ',
        ];

        $messages = [
            'email.unique' => 'User with the email ' . $appUserRequest->email . ' already exists.',
            'phoneNumber.unique' => 'User with the phone number ' . $appUserRequest->phoneNumber . ' already exists.',
            'phoneNumber.min' => 'Invalid phone number: must be at least 9 characters long.',
            'phoneNumber.max' => 'Invalid phone number: cannot exceed 15 characters.',
            'email.email' => 'The email ' . $appUserRequest->email . ' is invalid.',
            'password.min' => 'Password must be at least 6 characters long.',
            'password.not_contains' => 'Password cannot contain spaces.',
        ];

        $validator = Validator::make($appUserRequest->all(), $rules, $messages);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }


        $data = $appUserRequest->validated();
        $data['password'] = Hash::make($data['password']);
        $appUser = AppUserRepository::saveAppUser($data);

        return AppUserResponse::mapAppUserToResponse($appUser);
    }
}

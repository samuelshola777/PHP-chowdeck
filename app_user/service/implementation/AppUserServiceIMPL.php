<?php

namespace App\Services;

use App\Http\Requests\AppUserRequest;
use App\Http\Responses\AppUserResponse;
use App\Models\AppUser;



class AppUserServiceImpl implements AppUserService{
    protected $appUserRepository;

    public function __construct( $appUserRepository)
    {
        $this->appUserRepository = $appUserRepository;
    }


    public function createAppUser(AppUserRequest $appUserRequest): AppUserResponse
    {
        // Extract data from the request
        $data = $appUserRequest->validated();


        $appUser = AppUser::create($data);

        // Prepare data for the response
        $responseData = [
            'id' => $appUser->id,
            'firstName' => $appUser->firstName,
            'lastName' => $appUser->lastName,
            'email' => $appUser->email, // Add any other fields you need
            // Include additional fields as needed
        ];

        // Create an AppUserResponse object with the prepared data
        $appUserResponse = new AppUserResponse($responseData);

        return $appUserResponse;
    }

}
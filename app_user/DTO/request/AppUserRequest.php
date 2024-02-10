<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppUserRequest extends FormRequest{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:App\Models\AppUser,email',
            'password' => 'required|string|min:6|max:255',
            'phoneNumber' => 'required|string|max:20',
            'role' => 'string|max:20',
            'registration_date' => 'date',
            'profilePictureLink' => 'string|nullable',
            'verificationState' => 'string',
        ];
    }
}
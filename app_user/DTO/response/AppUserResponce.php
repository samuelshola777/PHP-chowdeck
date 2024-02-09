<?php

namespace App\Http\Responses;

class AppUserResponse
{
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $role;
    public $registration_date;
    public $profilePictureLink;
    public $verificationState;

    public function __construct($data)
    {
        $this->firstName = $data['firstName'] ?? null;
        $this->lastName = $data['lastName'] ?? null;
        $this->phoneNumber = $data['phoneNumber'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->registration_date = $data['registration_date'] ?? null;
        $this->profilePictureLink = $data['profilePictureLink'] ?? null;
        $this->verificationState = $data['verificationState'] ?? null;
    }
}

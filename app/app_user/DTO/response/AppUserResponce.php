<?php

namespace App\app_user\DTO\response;

use app\app_user\data\model\AppUser;
use Illuminate\Http\Resources\Json\JsonResource;

class AppUserResponse extends JsonResource
{
    private $firstName;
    private $lastName;
      private $phoneNumber;
    private $role;
     private $registration_date;
      private $profilePictureLink;
      private $verificationState;

    public function __construct($data){

        $this->firstName = $data['firstName'] ?? null;
        $this->lastName = $data['lastName'] ?? null;
        $this->phoneNumber = $data['phoneNumber'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->registration_date = $data['registration_date'] ?? null;
        $this->profilePictureLink = $data['profilePictureLink'] ?? null;
        $this->verificationState = $data['verificationState'] ?? null;
    }


    public static function mapAppUserToResponse(AppUser $appUser): AppUserResponse
    {
        return new AppUserResponse([
            'firstName' => $appUser->firstName,
            'lastName' => $appUser->lastName,
            'phoneNumber' => $appUser->phoneNumber,
            'role' => $appUser->role,
            'registration_date' => $appUser->registration_date,
            'profilePictureLink' => $appUser->profilePictureLink,
            'verificationState' => $appUser->verificationState,
        ]);

    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
    }

    public function setProfilePictureLink($profilePictureLink)
    {
        $this->profilePictureLink = $profilePictureLink;
    }

    public function setVerificationState($verificationState)
    {
        $this->verificationState = $verificationState;
    }

    // Getters
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    public function getProfilePictureLink()
    {
        return $this->profilePictureLink;
    }

    public function getVerificationState()
    {
        return $this->verificationState;
    }


}
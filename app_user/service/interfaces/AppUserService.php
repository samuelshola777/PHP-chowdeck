<?php

namespace App\Services;


use App\Http\Responses\AppUserResponse;

interface AppUserService{


    public function  createAppUser($appUserRequest):AppUserResponse;

    // Define methods that your service will implement
}
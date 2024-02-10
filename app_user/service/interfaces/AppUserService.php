<?php

namespace App\Services;

use App\Http\Requests\AppUserRequest;
use App\Http\Responses\AppUserResponse;

interface AppUserService{


    public function  createAppUser(AppUserRequest  $appUserRequest):AppUserResponse;

    // Define methods that your service will implement
}
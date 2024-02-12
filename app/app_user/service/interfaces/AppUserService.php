<?php

namespace App\app_user\Service\interfaces;

use App\app_user\DTO\Requests\AppUserRequest;
use App\app_user\DTO\Response\AppUserResponse;

interface AppUserService{


    public function  createAppUser(AppUserRequest  $appUserRequest):AppUserResponse;

}
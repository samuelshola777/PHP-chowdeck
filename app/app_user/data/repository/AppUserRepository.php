<?php

namespace App\app_user\data\repository;

use App\app_user\data\model\AppUser;

class AppUserRepository
{
    public static function saveAppUser(array $data): AppUser{
        return AppUser::create($data);
    }
}
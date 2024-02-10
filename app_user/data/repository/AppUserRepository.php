<?php

namespace App\Services;

use App\Models\AppUser;

class AppUserRepository
{
    public static function saveAppUser(array $data): AppUser
    {
        return AppUser::create($data);
    }
}
<?php

namespace App\Services;



class AppUserServiceImpl implements AppUserService{
    protected $appUserRepository;

    public function __construct( $appUserRepository)
    {
        $this->appUserRepository = $appUserRepository;
    }
}
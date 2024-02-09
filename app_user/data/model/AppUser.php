<?php

use Illuminate\Database\Eloquent\Model;

    class AppUser extends Model{

          protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phoneNumber',
        'role',
        'registration_date',
        'profilePictureLink',
        'verificationState',
    ];

    }

?>
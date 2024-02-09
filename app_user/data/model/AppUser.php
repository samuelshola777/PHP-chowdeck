<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;

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

    public static $rules = [
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'email' => 'required|email|unique:app_users,email',
        'password' => 'required|string|min:6|max:255',
        'phoneNumber' => 'required|string|max:20',
        'role' => 'string|max:20',
        'registration_date' => 'date',
        'profilePictureLink' => 'string|nullable',
        'verificationState' => 'string',
    ];

    // Define relationships, accessors, mutators, etc., if needed
}

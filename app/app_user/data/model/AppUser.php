<?php
namespace App\app_user\data\model;

use App\app_user\data\model\enum\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model{

    use HasFactory;

    protected $primaryKey = 'id';


    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'role',
        'phoneNumber',
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
    'role' => 'required|string|in:' . Role::ADMIN . ',' . Role::CUSTOMER . ',' . Role::DISPATCH_RIDER,
    'registration_date' => 'date',
    'profilePictureLink' => 'nullable|string',
    'verificationState' => 'string',
];



}

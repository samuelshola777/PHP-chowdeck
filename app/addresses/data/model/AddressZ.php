<?php

namespace App\addresses\data\model;

use app\addresses\data\model\enumAddressType\AddressType;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use app\app_user\data\model\AppUser;

class AddressZ extends Model{
     protected $table = 'address_z';

    protected $primaryKey = 'id';

    protected $fillable = [
        'streetAddress',
        'houseNumber',
        'localGovernmentArea',
        'residents_state',
        'address_type',
        'app_user_id',
    ];

            protected $rules = ['streetAddress'=>'required|string|max:255',
        'houseNumber'=>'required|numeric|max:25',
        'localGovernmentArea'=>'required|string|max:255',
        'residents_state'=>'required|string|max:50',
        'address_type'=>'required|string|max:255'.AddressType::DELIVERY_ADDRESS.','.AddressType::PICK_UP_ADDRESS.','.AddressType::RESIDENT_ADDRESS
        ];

        protected $messages = ['streetAddress'=>'invalid street address value',
        'houseNumber'=>'invalid house number value',
        'localGovernmentArea'=>'invalid Local Government Area value',
        'residents_state'=>'invalid residents state value',
        'address'=>'invalid address value',

    ];


    public function appUser()
    {
        return $this->belongsTo(AppUser::class);
    }

    // Getters
    public function getStreetAddressAttribute($value)
    {
        return $value;
    }

    public function getHouseNumberAttribute($value)
    {
        return $value;
    }

    public function getLocalGovernmentAreaAttribute($value)
    {
        return $value;
    }

    public function getResidentsStateAttribute($value)
    {
        return $value;
    }

    public function getAddressTypeAttribute($value)
    {
        return $value;
    }

    // Setters
    public function setStreetAddressAttribute($value)
    {
        $this->attributes['streetAddress'] = $value;
    }

    public function setHouseNumberAttribute($value)
    {
        $this->attributes['houseNumber'] = $value;
    }

    public function setLocalGovernmentAreaAttribute($value)
    {
        $this->attributes['localGovernmentArea'] = $value;
    }

    public function setResidentsStateAttribute($value)
    {
        $this->attributes['residents_state'] = $value;
    }

    public function setAddressTypeAttribute($value)
    {
        $this->attributes['address_type'] = $value;
    }
}
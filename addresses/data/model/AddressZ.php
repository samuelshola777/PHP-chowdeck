<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressZ extends Model{
    protected $fillable = [
        'streetAddress',
        'houseNumber',
        'localGovernmentArea',
        'residents_state',
        'address_type',
    ];

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
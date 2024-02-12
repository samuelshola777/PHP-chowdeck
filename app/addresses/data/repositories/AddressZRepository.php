<?php

namespace App\Data\Repositories;

use App\addresses\data\model\AddressZ;

class AddressZRepository
{
    public static function saveAddress(array $data)
    {
        return AddressZ::create($data);
    }
}
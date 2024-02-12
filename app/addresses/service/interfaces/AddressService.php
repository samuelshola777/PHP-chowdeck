<?php
namespace App\addresses\Service\interfaces;

use app\Addresses\data\model\AddressZ;

    interface AddressService{

        public function saveAddress(array $data):AddressZ;


    }

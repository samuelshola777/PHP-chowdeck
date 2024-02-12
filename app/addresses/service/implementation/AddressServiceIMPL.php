<?php

namespace App\Addresses\Service\Implementations;

use App\Addresses\Service\Interfaces\AddressService;

use app\addresses\data\model\enumAddressType\AddressType;
use App\Data\Repositories\AddressZRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use app\Addresses\data\model\AddressZ;

class AddressServiceIMPL implements AddressService
{
    protected $addressRepository;

    public function __construct(AddressZRepository $addressRepository){
        $this->addressRepository = $addressRepository;
    }
  public function saveAddress(array $data):AddressZ{


       $rules = ['streetAddress'=>'required|string|max:255',
        'houseNumber'=>'required|numeric|max:25',
        'localGovernmentArea'=>'required|string|max:255',
        'residents_state'=>'required|string|max:50',
        'address_type'=>'required|string|max:255'.AddressType::DELIVERY_ADDRESS.','.AddressType::PICK_UP_ADDRESS.','.AddressType::RESIDENT_ADDRESS
        ];

         $messages = ['streetAddress'=>'invalid street address value',
        'houseNumber'=>'invalid house number value',
        'localGovernmentArea'=>'invalid Local Government Area value',
        'residents_state'=>'invalid residents state value',
        'address'=>'invalid address value',

    ];

    $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

    $savedUser = $this->addressRepository->saveAddress($data);
        return $savedUser;
  }



}

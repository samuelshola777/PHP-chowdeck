<?php
namespace app\addresses\data\model\enumAddressType;

  enum AddressType: string {
    case RESIDENT_ADDRESS = "RESIDENT_ADDRESS";
     case DELIVERY_ADDRESS = "DELIVERY_ADDRESS";
       case PICK_UP_ADDRESS = "PICK_UP_ADDRESS";
  }

<?php
namespace App\app_user\data\model\enum;
    enum Role: string {
        case ADMIN = "ADMIN";
        case  DISPATCH_RIDER = "DISPATCH_RIDER";
         case CUSTOMER = "CUSTOMER";
    }
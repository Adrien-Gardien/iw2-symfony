<?php 

namespace App\Enum;

enum UserAccountStatusEnum: string
{
    case VALIDE = "valid";

    case PENDING = "pending";
    
    case REJECTED = "rejected";

}
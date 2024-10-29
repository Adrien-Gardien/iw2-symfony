<?php 

namespace App\Enum;

enum CommentStatusEnum: string
{
    case VALIDE = "valid";

    case PENDING = "pending";
    
    case REJECTED = "rejected";

}
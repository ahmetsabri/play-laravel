<?php

namespace App\Enums;

enum PostStatus: int
{
    case REJECTED = 0;
    case APPROVED = 1;
    case PENDING = 2;
}

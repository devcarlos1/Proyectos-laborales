<?php

namespace App\Enumerators;

enum AdminType: int
{
    case OWNER = 1;
    case PROGRAMMER = 2;
    case MANAGER = 3;
    case OVERSEER = 4;
    case CHATMOD = 5;
    case SUPPORT = 6;
    case OPERATOR = 7;
}

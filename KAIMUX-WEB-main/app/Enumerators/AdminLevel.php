<?php

namespace App\Enumerators;

enum AdminLevel: int
{
    case OWNER = 5;
    case MANAGER = 4;
    case OVERSEER = 3;
    case CHATMOD = 2;
    case SUPPORT = 1;
}

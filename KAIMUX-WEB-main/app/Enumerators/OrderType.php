<?php

namespace App\Enumerators;

enum OrderType: int
{
    case BANK = 1;
    case SMS = 2;
}

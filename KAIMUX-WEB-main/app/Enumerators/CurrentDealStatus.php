<?php

namespace App\Enumerators;

enum CurrentDealStatus: int
{
    case USED = 1;
    case NOT_USED = 2;
    case EXPIRED = 3;
}

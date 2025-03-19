<?php

namespace App\Enumerators;

enum DealType: int
{
    case DAYS_35_AFTER_LAST_PURCHASE = 1;
    case FIRST_JOIN_DEAL = 2;
    case WEEK_AFTER_JOIN_DEAL = 3;
}

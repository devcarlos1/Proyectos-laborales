<?php

namespace App\Enumerators;

enum DJStatus: int
{
    case WAITING = 1;
    case PLAYING = 2;
    case PLAYED = 3;
}

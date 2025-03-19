<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/paysera/bank',
        '/paysera/sms',
        '/paysera/deal/bank',
        '/paysera/deal/sms',
        '/api/dj/play',
        '/api/services',
        '/api/dj/skip',
        '/api/dj/like',
        '/api/dj/dislike',
        '/api/dj/playlist',
        '/api/dj/getCurrent',
        '/api/dj/getListeners',
        '/api/dj/playlist/delete',
        '/api/hotDeal',
        '/api/rules',
        '/api/isPlayerPurchasedService',
    ];
}

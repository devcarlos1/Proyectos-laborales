<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\BalancePlayer;
use Illuminate\View\View;

class BalancePlayerController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.balance-player', [
                'data' => BalancePlayer::all()
            ]);
    }
}

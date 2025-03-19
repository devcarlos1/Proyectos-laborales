<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\BalanceFilling;
use Illuminate\View\View;

class BalanceFillingController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.balance', [
                'data' => BalanceFilling::all()
            ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiscountCode;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DiscountsController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.discounts', [
                'codes' => DiscountCode::all(),
                'services' => Service::all()
            ]);
    }
}

<?php

namespace App\Http\Controllers\Admin\Deals;

use App\Enumerators\DealType;
use App\Http\Controllers\Controller;
use App\Models\Deal;
use App\Models\Server;
use App\Models\Service;
use Illuminate\View\View;

class DealsController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else {
            return View('admin.pages.Deals.deals', [
                'services' => Service::all(),
                'deals' => Deal::all(),
                'dealTypes' => DealType::cases()
            ]);
        }
    }
}

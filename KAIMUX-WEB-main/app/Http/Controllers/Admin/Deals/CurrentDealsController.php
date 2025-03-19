<?php

namespace App\Http\Controllers\Admin\Deals;

use App\Enumerators\CurrentDealStatus;
use App\Http\Controllers\Controller;
use App\Models\CurrentDeal;
use App\Models\Deal;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurrentDealsController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else {
            return View('admin.pages.Deals.current-deals', [
                'currentDeals' => CurrentDeal::all(),
                'deals' => Deal::all(),
                'statuses' => CurrentDealStatus::cases()
            ]);
        }
    }
    
}

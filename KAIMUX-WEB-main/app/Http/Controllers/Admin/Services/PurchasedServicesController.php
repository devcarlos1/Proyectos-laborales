<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\ServicesOrder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PurchasedServicesController extends Controller
{
    public function create(): View
    {
        $today = date("Y-m-d");
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.purchasedServices', [
                'servicesOrders' => ServicesOrder::whereDate('created_at', '=', $today)->get()->reverse()
            ]);
    }

    public function filter(Request $request): View
    {
        $payments = [];
        $from = $request->input('from');
        $to = $request->input('to');
        $name = $request->input('name');
        if ($name) {
            $payments = ServicesOrder::where(['username' => $name])->get();
        } else if ($from && $to) {
            $payments = ServicesOrder::whereDate('created_at', '>=', $from)
                                ->whereDate('created_at', '<=', $to)
                                ->get();
        }

        $filterType = $request->input('filter');
        if ($filterType === 'Šiandien') {
            $today = date("Y-m-d");
            $payments = ServicesOrder::whereDate('created_at', '=', $today)
                                ->get();
        } else if ($filterType === 'Vakar') {
            $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
            $payments = ServicesOrder::whereDate('created_at', '=', $yesterday)->get();
        } else if ($filterType === 'Šį mėnesį') {
            $from = date("Y-m-01 00:00:00");
            $to = date("Y-m-d H:i:s");
            $payments = ServicesOrder::whereDate('created_at', '>=', $from)
                                ->whereDate('created_at', '<=', $to)
                                ->get();
        }
        
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.purchasedServices', [
                'servicesOrders' => $payments
            ]);
    }
}

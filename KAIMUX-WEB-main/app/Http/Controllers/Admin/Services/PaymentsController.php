<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentsController extends Controller
{
    public function create(): View
    {
        $today = date("Y-m-d");
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.payments', [
                'payments' => Payment::whereDate('created_at', '=', $today)->where('orderStatus', true)->get()->reverse()
            ]);
    }

    public function filter(Request $request): View
    {
        $payments = [];
        $from = $request->input('from');
        $to = $request->input('to');
        $name = $request->input('name');
        if ($name) {
            $payments = Payment::where(['orderStatus' => true, 'username' => $name])->get();
        } else if ($from && $to) {
            $payments = Payment::whereDate('created_at', '>=', $from)
                                ->whereDate('created_at', '<=', $to)
                                ->where('orderStatus', true)
                                ->get();
        }

        $filterType = $request->input('filter');
        if ($filterType === 'Šiandien') {
            $today = date("Y-m-d");
            $payments = Payment::whereDate('created_at', '=', $today)
                                ->where('orderStatus', true)
                                ->get();
        } else if ($filterType === 'Vakar') {
            $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
            $payments = Payment::whereDate('created_at', '=', $yesterday)->where('orderStatus', true)->get();
        } else if ($filterType === 'Šį mėnesį') {
            $from = date("Y-m-01 00:00:00");
            $to = date("Y-m-d H:i:s");
            $payments = Payment::whereDate('created_at', '>=', $from)
                                ->whereDate('created_at', '<=', $to)
                                ->where('orderStatus', true)
                                ->get();
        }
        
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.payments', [
                'payments' => $payments
            ]);
    }

    public function createPaymentMethods(Request $request): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.payment-methods', [
                'data' => PaymentMethod::all()
            ]);
    }
}

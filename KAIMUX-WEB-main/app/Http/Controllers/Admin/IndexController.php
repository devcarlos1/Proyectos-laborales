<?php

namespace App\Http\Controllers\Admin;

use App\Enumerators\AdminLevel;
use App\Enumerators\OrderType;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\UnequeJoinPerDay;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function create(): View
    {
        if (!User::where('admin', AdminLevel::OWNER)->exists()) {
            $user = new User(['name' => 'Admin', 'password' => 'Slaptazodis1']);
            $user->admin = AdminLevel::OWNER;
            $user->save();
        }
        if (!auth()->check())
            return View('admin.login');
        else
            return $this->index();
    }

    public function login(Request $request): View|RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt(request(['name', 'password'])) == false) {
            return View('admin.login', ['error' => 'Slapyvardis arba slaptažodis nėra teisingas!']);
        } else {
            return redirect()->route('admin');
        }
    }

    private function index(): View
    {
        $paymentAmount = [];
        $months = [];
        $biggest = 0;

        $groupedPayments = Payment::where('created_at', '>=', date('Y-m-d', strtotime('-12 months')))
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m');
            });

        foreach ($groupedPayments as $month => $payments) {
            $months[] = $month;
            if (!isset($paymentAmount['bank'][$month]))
                $paymentAmount['bank'][$month] = 0;
            if (!isset($paymentAmount['sms'][$month]))
                $paymentAmount['sms'][$month] = 0;
        }

        foreach ($groupedPayments as $key => $payments) {
            foreach ($payments as $payment) {
                if (!$payment->orderStatus)
                    continue;
                if ($payment->orderType === OrderType::SMS->value) {
                    $paymentAmount['sms'][$key] += $payment->amount / 100 * 0.4;
                } else {
                    $id = $payment->orderId;
                    $paymentAmount['bank'][$key] += $payment->amount / 100 * 0.95;
                }
            }
            if ($paymentAmount['sms'][$key] > 2000)
                $paymentAmount['sms'][$key] = 0;
            if ($paymentAmount['bank'][$key] > 4300)
                $paymentAmount['bank'][$key] = 0;
            if ($biggest < $paymentAmount['sms'][$key] + $paymentAmount['bank'][$key])
                $biggest = $paymentAmount['sms'][$key] + $paymentAmount['bank'][$key];
        }

        $paymentAmount['sms'] = array_reverse($paymentAmount['sms']);
        $paymentAmount['bank'] = array_reverse($paymentAmount['bank']);
        $months = array_reverse($months);

        return View('admin.index', [
            'payments' => $paymentAmount,
            'months' => $months,
            'biggest' => $biggest
        ]);
    }
}

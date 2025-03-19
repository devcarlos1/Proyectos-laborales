<?php

namespace App\Http\Controllers\PaySera;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PayseraResponseController extends Controller
{
    public function success(Request $request): View|RedirectResponse
    {
        if ($request->hasAny('data')) {
            return Redirect(strtok($request->path(), '?'));
        } else {
            return View('user.pages.paysera.success');
        }
    }

    public function cancel(Request $request): View|RedirectResponse
    {
        if ($request->hasAny('data')) {
            return Redirect(strtok($request->path(), '?'));
        } else {
            return View('user.pages.paysera.cancel');
        }
    }
}

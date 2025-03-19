<?php

namespace App\Http\Controllers\Admin;

use App\Enumerators\AdminType;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminsController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.admins', ['users' => Admin::all(), 'levels' => AdminType::cases()]);
    }
}

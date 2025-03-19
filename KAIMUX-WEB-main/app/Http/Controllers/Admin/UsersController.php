<?php

namespace App\Http\Controllers\Admin;

use App\Enumerators\AdminLevel;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.users', ['users' => User::all(), 'levels' => AdminLevel::cases()]);
    }
}

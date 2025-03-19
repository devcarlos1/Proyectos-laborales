<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServersController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.services.servers', [
                'servers' => Server::all()
            ]);
    }
}

<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else {
            $data = [];
            foreach (Server::all() as $server) {
                $data[$server->title] = $server->getCategories();
            }
            return View('admin.pages.services.categories', [
                'data' => $data,
                'servers' => Server::all()
            ]);
        }
    }
}

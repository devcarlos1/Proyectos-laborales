<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Server;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else {
            $data = [];
            foreach (Category::all() as $category) {
                $data[$category->getServer()->title . ' ' . $category->title] = $category->getServices();
            }

            return View('admin.pages.services.services', [
                'data' => $data,
                'categories' => Category::all()
            ]);
        }
    }
}

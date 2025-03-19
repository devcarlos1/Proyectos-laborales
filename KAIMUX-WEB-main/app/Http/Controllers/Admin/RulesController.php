<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainPageText;
use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\View\View;

class RulesController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.rules', [
                'rules' => Rule::all(),
                'firstText' => MainPageText::all()
            ]);
    }
}

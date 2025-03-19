<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Constant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConstantsController extends Controller
{
    public function create(): View
    {
        return view('admin.pages.constants', ['data' => Constant::all()]);
    }
}

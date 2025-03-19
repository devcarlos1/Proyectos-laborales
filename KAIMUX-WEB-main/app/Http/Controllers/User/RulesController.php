<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MainPageText;
use App\Models\Rule;
use Illuminate\View\View;

class RulesController extends Controller
{
    public function create(): View
    {
        return View('user.pages.rules', [
            'rules' => Rule::all(),
            'longText' => MainPageText::all()[3],
            'shortText' => MainPageText::all()[4]
        ]);
    }
}

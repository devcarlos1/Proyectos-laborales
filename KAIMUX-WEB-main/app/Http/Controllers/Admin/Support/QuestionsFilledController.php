<?php

namespace App\Http\Controllers\Admin\Support;

use App\Http\Controllers\Controller;
use App\Models\AttemptsToSupport;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionsFilledController extends Controller
{
    public function create(): View
    {
        return view('admin.pages.support.attempts', ['data' => AttemptsToSupport::all()]);
    }
}

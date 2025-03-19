<?php

namespace App\Http\Controllers\Admin\Support;

use App\Http\Controllers\Controller;
use App\Models\AdditionalQuestion;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionsAdditionalController extends Controller
{
    public function create(): View
    {
        return view('admin.pages.support.additional-questions', ['data' => AdditionalQuestion::all()]);
    }
}

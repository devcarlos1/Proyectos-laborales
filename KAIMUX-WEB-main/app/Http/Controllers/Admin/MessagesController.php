<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\View\View;

class MessagesController extends Controller
{
    public function create(): View
    {
        return view('admin.pages.messages', ['data' => Message::all()]);
    }
}

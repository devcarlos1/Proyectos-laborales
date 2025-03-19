<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function create(Request $request): View
    {
        return view('user.pages.contact', [
            'success' => $request->session()->get('success'),
        ]);
    }

    public function sendMessage(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if (strpos($request->input('message'), 'http') !== false) {
            return redirect()->route('contact')->with('success', true);
        }

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('contact')->with('success', true);
    }
}

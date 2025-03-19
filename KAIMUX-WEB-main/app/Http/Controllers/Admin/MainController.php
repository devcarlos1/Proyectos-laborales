<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\MainPageText;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function create(): View
    {
        if (!auth()->check())
            return View('admin.login');
        else
            return View('admin.pages.main', [
                'games' => Game::all(),
                'firstText' => MainPageText::all()
            ]);
    }

    public function changeFirstText(Request $request): RedirectResponse
    {
        $text = MainPageText::find($request->id);
        if ($text) {
            $text->title = $request->title;
            $text->description = $request->description;
            $text->save();
        } else {
            $text = new MainPageText();
            $text->id = $request->id;
            $text->title = $request->title;
            $text->description = $request->description;
            $text->save();
        }
        
        return redirect()->route('admin-main');
    }
}

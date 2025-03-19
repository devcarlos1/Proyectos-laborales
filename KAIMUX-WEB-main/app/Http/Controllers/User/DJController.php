<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DJCurrentlyListening;
use App\Models\DJDefaultPlaylist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DJController extends Controller
{
    const hashCode = "SeecretRandomCode";

    public function create(): View
    {
        return view('user.pages.dj');
    }

    public function createCorrect(Request $request): View|RedirectResponse
    {
        $username = $request->username;
        $hash = $request->hash;
        if ($hash !== md5($username."".self::hashCode)) {
            return Redirect(strtok(route('dj'), '?'));
        }
        return view('user.pages.dj', [
            'status' => true,
            'user' => $username,
            'playlist' => DJDefaultPlaylist::all()
        ]);
    }
}

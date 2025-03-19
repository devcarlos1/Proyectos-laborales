<?php

namespace App\Http\Controllers\Admin\DJ;

use App\Http\Controllers\Controller;
use App\Models\DJDefaultPlaylist;
use App\Models\DJQueue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DJControllers extends Controller
{
    public function defaultPlaylist(): View
    {
        return view('admin.pages.DJ.default-playlist', [
            'data' => DJDefaultPlaylist::all()
        ]);
    }
    public function queue(): View
    {
        return view('admin.pages.DJ.queue', [
            'data' => DJQueue::all()->reverse()
        ]);
    }
}

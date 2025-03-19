<?php

namespace App\Http\Controllers\User;

use Illuminate\View\View;

use App\Enumerators\ConstantType;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Constant;
use \App\Models\Game;
use App\Models\MainPageText;
use Illuminate\Http\RedirectResponse;

class IndexController extends Controller
{
    private $defaultFirstText = [
        [
            'title' => 'Mūsų istorija',
            'description' => 'MyServer has been around for over 2 years now. What started off as a small community minecraft server has developed into something we couldn\'t even imagine.'
        ],
        [
            'title' => 'Mūsų administracija',
            'description' => 'The MyServer staff team are friendly, dedicated, and always online to help everything run smoothly. Have any questions? Make sure to do /staff ingame to reach out!'
        ],
        [
            'title' => 'Mūsų serveriai',
            'description' => 'We have Factions, KitPvP, and SkyBlock on our network, all with fully custom builds and useful perks and features. Join today at play.myserver.com!'
        ],
    ];

    public function create(): View
    {
        if (MainPageText::count() === 0) {
            foreach ($this->defaultFirstText as $text) {
                $mainPageText = new MainPageText();
                $mainPageText->title = $text['title'];
                $mainPageText->description = $text['description'];
                $mainPageText->save();
            }
        }
        return View('user.pages.index', [
            'admins' => Admin::all(),
            'games' => Game::all(),
            'mainPageText' => MainPageText::all()
        ]);
    }

    public function toDiscord(): RedirectResponse
    {
        return Redirect(Constant::where('type', ConstantType::DISCORD_LINK)->first()->value);
    }

    public function test()
    {
    }
}

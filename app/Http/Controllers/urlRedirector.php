<?php

namespace App\Http\Controllers;

use App\Models\Click;
use App\Models\Link;
use Illuminate\Http\Request;

class urlRedirector extends Controller
{
    public function __invoke(Request $request, $short_url)
    {
        $link = Link::where('short_url', $short_url)->first();

        if (!$link) {
            return redirect('/');
        }

        $click = new Click();
        $click->user_agent = $request->header('User-Agent');
        $click->ip_address = $request->ip();
        $click->link_id = $link->id;
        $click->country = "Bangladesh"; //TODO: country will develop latter;
        $click->city = "Dhaka"; //TODO: city will develop latter;
        $click->referer = $request->header('referer');
        $click->save();
        return redirect()->away($link->long_url);
    }
}

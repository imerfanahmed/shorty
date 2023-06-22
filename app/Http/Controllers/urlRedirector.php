<?php

namespace App\Http\Controllers;

use App\Models\Click;
use App\Models\Link;
use Carbon\Carbon;
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

    public function stats($short_url)
    {
        $link = Link::where('short_url', $short_url)->first();
        $total_clicks = $link->clicks()->count();
        //stats for last 30 days
        $last_30_days = [];
        $last_30_days_column = [];
        for ($i = 0; $i < 30; $i++) {
            $date = Carbon::now()->subDays($i);
            $clicks = $link->clicks()->whereDate('created_at', $date)->count();
            array_push($last_30_days, $clicks);
            array_push($last_30_days_column, $date->format('d M'));
        }
        $last_30_days = array_reverse($last_30_days);
        $last_30_days_column = array_reverse($last_30_days_column);
        //dd($last_30_days, $last_30_days_column);

        //devices desktop, mobile, tablet,other
        $devices = collect();
        $devices['desktop'] = $link->clicks()->where('user_agent', 'like', '%Windows NT%')->orWhere('user_agent', 'like', '%Macintosh%')->count();
        $devices['mobile'] = $link->clicks()->where('user_agent', 'like', '%Android%')->orWhere('user_agent', 'like', '%iPhone%')->orWhere('user_agent', 'like', '%iPad%')->count();
        $devices['tablet'] = $link->clicks()->where('user_agent', 'like', '%iPad%')->count();
        $devices['other'] = $total_clicks - $devices['desktop'] - $devices['mobile'] - $devices['tablet'];
        $devices = $devices->values()->all();

        //

        return view('stats', compact('link', 'total_clicks', 'last_30_days', 'last_30_days_column', 'devices'));
    }
}

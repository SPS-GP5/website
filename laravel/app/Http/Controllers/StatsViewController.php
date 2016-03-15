<?php

namespace App\Http\Controllers;

use App\StatsView;
use App\Http\Controllers\Controller;

class StatsViewController extends Controller
{
    protected function select() {
        $statsview = StatsView::all();

        //dd($statsview);

        return view('stats', ['statsview' => $statsview]);
    }
}


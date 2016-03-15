<?php

namespace App\Http\Controllers;

use App\Models\StatsView;
use App\Http\Controllers\Controller;

class StatsViewController extends Controller
{
    protected function select() {

        $statsview = StatsView::all();

        return view('stats', ['statsview' => $statsview]);
    }
}


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ProjectdiaryController extends Controller
{
    public function showProjectdiary()
    {
    	return view('projectdiary');
    }

    public function showCreateProjectentry()
    {
    	return view('projectdiary-create');
    }
}


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use App\Models\DiaryEntry;
use Illuminate\Http\Request;
use Validator;

class ProjectDiaryController extends Controller
{
    public function showProjectDiary()
    {
    	$users = User::where('confirmed', 1)->where('active', 1)->where('role', 2)->orderBy('lastname')->orderBy('firstname')->get();
    	$sum = array();
		$huser = array(); // new array for users with entries in DiaryEntry
		$hsum = array();  // new array for sum(hours) of users with entries in DiaryEntry
		
    	foreach($users as $user) {
			$temp = DiaryEntry::where('user_id', $user->id)->sum('hours');
			// hours greater 0		
			if ($temp > 0) {
				$husers[$user->id] = $user;
				$hsum[$user->id] = $temp;
			} 
			// old behavior => pie chart needs that 
			$sum[$user->id] = $temp;
    	}

    	return view('projectdiary', array('users' => $users, 'sum' => $sum, 'husers' => $husers, 'hsum' => $hsum));
    }

    public function showCreateProjectEntry()
    {
    	if(Auth::user()->role != 2) {
    		return redirect('/intern/projectdiary');
    	}

    	return view('projectdiary-create');
    }

    public function postCreateProjectEntry(Request $request)
    {
    	if(Auth::user()->role != 2) {
    		return redirect('/intern/projectdiary');
    	}

        $date = $request->date;
        $hours = str_replace(',', '.', $request->hours);
        $description = $request->description;
        
        $validator = Validator::make($request->all(), [
        	'date' => 'required|date_format:d.m.Y',
            'hours' => 'required|numeric',
            'description' => 'required|max:500'
        ]);

        if($validator->fails()){
            return redirect('/intern/projectdiary/create')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            $diaryentry = new DiaryEntry;
            $diaryentry->user_id = Auth::user()->id;
            $diaryentry->date = $date;
            $diaryentry->hours = $hours;
            $diaryentry->description = $description;
            $diaryentry->save();
        }

    	return view('projectdiary-create', array('created' => true));
    }

    public function ajaxGetUserEntries($user_id)
    {
    	$entries = DiaryEntry::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    	return array(view('layouts/projectdiary-entriesByUser', array('entries' => $entries))->render(), $entries);
    }
}


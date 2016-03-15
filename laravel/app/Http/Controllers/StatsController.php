<?php

namespace App\Http\Controllers;

use App\Models\stats;
use App\Http\Controllers\Controller;

use Validator;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:50|alpha',
            'lastName' => 'required|max:50|alpha',
            'time' => 'required|timestamp',
            'duration' => 'required|date',
            'description' => 'required|max:500',
        ]);
    }

    /**
     * Insert a new stats instance after validation.
     *
     * @param  array  $data
     */
    protected function insert(Request $request)
    {
        $validator = Validator::make($request->all());

        if($validator->fails()) {
            return redirect('stats')
                ->withErrors($validator)
                ->withInput();
        } else {
            $stats = new Stats;
            $stats->firstName = $data['firstName'];
            $stats->lastName = $data['lastName'];
            $stats->time = timestamp($data['time']);
            $stats->duration = date($data['duration']);
            $stats->description = $data['description'];
            $stats->save();
        }
    }

    protected function select(Request $request)
    {
        $validator = Validator::make($request->all());

        if($validator->fails()) {
            return redirect('stats')
                ->withErrors($validator)
                ->withInput();
        } else {
            $stats = new Stats;
            $stats->firstName = $data['firstName'];
            $stats->lastName = $data['lastName'];
            $stats->time = timestamp($data['time']);
            $stats->duration = date($data['duration']);
            $stats->description = $data['description'];
            $stats->save();
        }
    }
}


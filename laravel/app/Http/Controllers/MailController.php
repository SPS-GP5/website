<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Config;


class MailController extends Controller
{
    public static function sendWelcomeMail($firstname, $lastname, $email, $confirmcode)
    {
    	$url = Config::get('app.domain') . 'confirm/' . $confirmcode;

    	$data = array(
	        'firstname' => "Michael",
	        'lastname' => "Ester",
	        'email' => 'mail@michaelester.at',
	        'url' => $url
	    );

	    Mail::send('emails.welcome', $data, function ($message) use ($data) {
	        $message->from('gfivebot@gmail.com', 'G5BOT');
	        $message->to($data['email'])->subject('Willkommen bei G5BOT!');

	    });

	    return true;
    }
}


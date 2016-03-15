<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;


class MailController extends Controller
{
    public function sendWelcomeMail()
    {
    	$email = "mail@michaelester.at";

        $data = array(
	        'firstname' => "Michael",
	        'lastname' => "Ester",
	        'email' => 'mail@michaelester.at'
	    );

	    Mail::send('emails.welcome', $data, function ($message) use ($data) {
	        $message->from('gfivebot@gmail.com', 'G5BOT');
	        $message->to($data['email'])->subject('Willkommen bei G5BOT!');

	    });

	    return "Your email has been sent successfully";
    }
}


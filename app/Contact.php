<?php

namespace App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{
	//
	public function sendToAdmin()
	{
		$user = array(
			'email' => 'andreitimotin11@gmail.com',
		);
		$data = array(
			'email' => 'andreitimotin11@gmail.com',
			'message_body' => 'message',
		);
		Mail::queue('andreitimotin11@gmail.com', ['email' => 'andreitimotin11@gmail.com',
			'message_body' => 'message'], function($message) use ($user) {
			$message->to('andreitimotin11@gmail.com')
				->replyTo($user['email'])
				->subject('Contact form request');
		});
	}
}

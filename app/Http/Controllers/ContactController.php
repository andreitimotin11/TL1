<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	//
	public function show(Request $request)
	{
		if ($request->isMethod('post')) {
			$rules = [
				'name' => 'required',
				'email' => 'required',
			];
			$this->validate($request, $rules);
			
			$contact = new Contact();
			$contact->name = $request->name;
			$contact->email = $request->email;
			$contact->phone = $request->phone;
			$contact->company = $request->company;
			$contact->message = $request->message;
			$contact->save();
//			$contact->sendToAdmin();
		}
		
		return view('contact');
	}
}

<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{  
	public function create() {
		return view('sessions/create');
	}

	public function store() {
		//Validate form
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
		]);

		//Create and save user
		$user = User::create(request(['name', 'email', 'password']));

		//Sign them in
		auth()->login($user);
		
		//Redirect
		return redirect()->home();
	}
}

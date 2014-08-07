<?php

class RegistrationController extends BaseController
{
	/**
	 * Display the account registration view.
	 * GET /register/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('register.create');
	}

	/**
	 * Handle a POST request to create an account.
	 * POST /register/create
	 *
	 * @return Response
	 */
	public function store()
	{
		$token = md5(uniqid(rand()));
		$email = Input::get('email');
		$fullname = Input::get('fullname');

		$user = new User;
		$user->fullname = $fullname;
		$user->username = Input::get('username');
		$user->email    = $email;
		$user->password = Hash::make(Input::get('password'));
		$user->confirmation_token = $token;

		if ($user->save())
		{
			Mail::queue('emails.register.confirm', ['token' => $token], function($message) use ($email, $fullname)
			{
				$message->to($email, $fullname)
						->subject('Collabreate: Welcome');
			});

			return Redirect::to('auth/login')->with('flash_message', 'Check your inbox for a confirmation email!');
		}

		return Redirect::back()->withErrors($user->errors()->all())->withInput();
	}

	/**
	 * Handle an email confirmation
	 * GET /register/{token}
	 *
	 * @return Response
	 */
	public function edit($token)
	{
		$user = User::where('confirmation_token', $token)->first();

		if ($user)
		{
			$user->confirmation_token = '';
			$user->save();

			return Redirect::to('auth/login')->with('flash_message', 'Thanks for confirming your email!');
		}
		
		dd('Confirmation token mismatch.');
	}
}
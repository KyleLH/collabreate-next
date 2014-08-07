<?php

class AuthController extends BaseController
{

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check())
		{
			return Redirect::back();
		}

		return View::make('auth.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /auth
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
		]);

		if ($attempt)
		{
			$user = User::where('email', $input['email'])->first();

			if (strlen($user->confirmation_token) !== 0)
			{
				Auth::logout();

				return Redirect::back()->with('flash_message', 'You forgot to confirm your account. Check your email!');
			}

			return Redirect::intended('/');
		}

		return Redirect::back()->with('flash_message', 'Invalid credentials!')->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}
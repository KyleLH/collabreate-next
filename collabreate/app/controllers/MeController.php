<?php

class MeController extends BaseController
{

	/**
	 * Display a listing of the resource.
	 * GET /me
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('me.home')->with([
			'username' => Auth::user()->username
		]);
	}

}
<?php

class ProfileSettingsController extends \BaseController
{
	public $colleges = [
		"CAS" => "CAS",
		"CFA" => "CFA",
		"CGS" => "CGS",
		"COM" => "COM",
		"ENG" => "ENG",
		"GMS" => "GMS",
		"LAW" => "LAW",
		"MED" => "MED",
		"MET" => "MET",
		"SAR" => "SAR",
		"OTP" => "OTP",
		"SDM" => "SDM",
		"SED" => "SED",
		"SHA" => "SHA",
		"SMG" => "SMG",
		"SPH" => "SPH",
		"SSW" => "SSW",
		"STH" => "STH",
		"UHC" => "UHC"
	];

	public $specialties = [
		"Website Development"				=> "Website Development",
		"Mobile App Development"			=> "Mobile App Development",
		"Graphic Design and Illustration"	=> "Graphic Design and Illustration",
		"Content Writing"					=> "Content Writing",
		"Animation and Video"				=> "Animation and Video",
		"Photography"						=> "Photography",
		"Sales and Marketing"				=> "Sales and Marketing"
	];

	/**
	 * Display a listing of the resource.
	 * GET /profilesettings
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();

		return View::make('me.settings.index')->with([
			'colleges'		=> $this->colleges,
			'specialties'	=> $this->specialties,
			'fullname'		=> $user->fullname,
			'username'		=> $user->username,
			'email'			=> $user->email
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profilesettings
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

}
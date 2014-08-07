<?php

class Participants extends Eloquent
{
	protected $table = 'participants';

	public function project()
	{
		return $this->belongsToMany('Project', 'participants');
	}
}
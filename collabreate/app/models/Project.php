<?php

class Project extends Eloquent
{
	protected $table = 'projects';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function participants()
	{
		return $this->hasMany('Participants', 'participants');
	}
}
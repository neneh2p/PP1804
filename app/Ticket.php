<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{	
	protected $guard = ['id'];
	
	public function comments()
	{
		return $this->hasMany('App\Comment', 'post_id');
	}
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getTitle()
    {
    	return $this->title;
    }
}

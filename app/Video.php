<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
		'title', 'url', 'form_id'
	];

	 public function form()
    {
        return $this->belongsTo('App\Form');
    }
}

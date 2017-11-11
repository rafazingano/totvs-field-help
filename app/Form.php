<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	protected $fillable = [
		'type', 'name', 'value', 'label', 'order'
	];
	
    public function video()
    {
        return $this->hasOne('App\Video');
    }
}

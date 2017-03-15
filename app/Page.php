<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	public function locale() {
		return $this->belongsTo('App\Locale');
    }

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

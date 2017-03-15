<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{

    public $timestamps = false;

    public static function comboBoxData() {
    	return self::get([
    		'id',
    		'name as value',
    	]);
    }

    public function page() {
    	return $this->hasMany('App\Page');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'title',
    	'image',
    	'description',
    	'url',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

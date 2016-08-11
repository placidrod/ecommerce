<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $fillable = [
    	'name', 'label', 'description'
    ];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}

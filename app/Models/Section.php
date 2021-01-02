<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    protected $fillable = ['id','name','user_id'];

    public function User() {
    	return $this->belongsTo('App\User');
    }

    public function Post() {
    	return $this->hasMany('App\Models\Post');
    }
}

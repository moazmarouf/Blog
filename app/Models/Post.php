<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   	protected $table = 'posts';
    protected $fillable = ['id','title','content','user_id','section_id'];

    public function User() {
    	return $this->belongsTo('App\User');
    }

    public function Section() {
    	return $this->belongsTo('App\Models\Section');
    }
    public function Comment() {
    	return $this->hasMany('App\Models\Comment');
    }
    public function Photo() {
    	return $this->belongsToMany('App\Models\Photo','post_photo');
    }
}


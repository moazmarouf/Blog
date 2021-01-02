<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','content','user_id','post_id'];

    public function User() {
    	return $this->belongsTo('App\User');
    }

    public function Post() {
    	return $this->belongsTo('App\Models\Post');
    }
}

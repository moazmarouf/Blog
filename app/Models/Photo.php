<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
      protected $table = 'photos';
    protected $fillable = ['id','path','user_id','post_id'];

     public function Post() {
    	return $this->belongsToMany('App\Models\Post','post_photo');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','content','slug','user_id','cat_id'];

    public function comment(){
        return $this->morphMany('App\Comment','commendable');
    }
}

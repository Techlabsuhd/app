<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table="articles";
    
    public function comments() {
        return $this->hasMany('App\Commnent', 'article_id');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }
}

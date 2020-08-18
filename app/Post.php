<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // zdejmujemy ograniczenia ktore nadaje nam laravel przy mass assigment w posts controller
    protected $guarded=[];
    public function user(){
    return $this->belongsTo(User::class);
    }
}

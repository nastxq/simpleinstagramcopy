<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];

   public function profileImage(){

    // zwraca zdjecie profilowe jezeli istnieje w przeciwnym przypadku korzysta z defaultowego
    $imagePath=($this->image) ? $this->image : 'profile/0YwG10QMvvWSUtsJChCOJMC0CXRlHIUcGnBfzrfH.jpeg';
       return '/storage/'.$imagePath;
   }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = [
 		'user_id','name','email','phone','schooling','state','city','contact_origin','additional_information',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function interest(){
    	return $this->hasMany(Interest::class);
    }

}

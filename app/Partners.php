<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    protected $fillable = [
 		'user_id','name','email','phone','status','additional_information',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

}

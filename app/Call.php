<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
 		'contact_id','date_contact','date_return','schedule','status','additional_information','user_id','course_id','time'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function contact(){
    	return $this->belongsTo(Contact::class);
    }

    public function course(){
    	return $this->belongsTo(Course::class);
    }
}
 
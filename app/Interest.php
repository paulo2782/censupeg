<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
     protected $fillable = [
 		'contact_id','course_id',
    ];

    public function contact(){
    	return $this->belongsTo(Contact::class);
    }
    public function course(){
    	return $this->belongsTo(Course::class);
    }

}

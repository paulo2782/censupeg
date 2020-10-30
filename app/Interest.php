<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
     protected $fillable = [
 		'contact_id','course_id',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = [
 		'name','email','phone','contact_origin','interest_course','date_contact','scheduled_return','schedule','status','additional_information','other_course',
    ];
}

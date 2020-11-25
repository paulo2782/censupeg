<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
 		'contact_id','date_contact','date_return','schedule','status',
    ];

    public function contact(){
    	return $this->belongsTo(Contact::class);
    }
}
 
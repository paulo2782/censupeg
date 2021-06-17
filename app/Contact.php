<?php

namespace App;

use App\Scopes\UserIsActive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'schooling',
        'state',
        'city',
        'contact_origin',
        'additional_information',
    ];

    /*================================================================================================================*/
    /*==================== BOOT =============================================================================*/
    /*================================================================================================================*/
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new UserIsActive);
    }

    /*================================================================================================================*/
    /*==================== RELATIONSHIPS =============================================================================*/
    /*================================================================================================================*/
    /** * @return \Illuminate\Database\Eloquent\Relations\BelongsTo */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** * @return \Illuminate\Database\Eloquent\Relations\HasMany */
    public function interest()
    {
        return $this->hasMany(Interest::class);
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'level',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*================================================================================================================*/
    /*==================== RELATIONSHIPS =============================================================================*/
    /*================================================================================================================*/
    /** * @return bool */
    public function isAdministrator()
    {
        return $this->level === 1;
    }

    /*================================================================================================================*/
    /*==================== METHODS ===================================================================================*/
    /*================================================================================================================*/

    /*================================================================================================================*/
    /*==================== GETS ======================================================================================*/
    /*================================================================================================================*/
    public function getLevelShowAttribute()
    {
        return $this->level === 1 ? 'Administrador' : 'Operador';
    }

    public function changeEmail()
    {
        $this->update([
            'email' => Str::replaceFirst("@", \sprintf("_%s@", \time()), $this->email),
        ]);
        return $this;
    }

}

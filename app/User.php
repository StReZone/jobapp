<?php

namespace App;

use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','dob','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function applicant()
    {
        return $this->belongsTo('App\Applicant','id_user');
    }

    public function authorizeRole($roles)
    {
        if(is_array($roles)) {
            return $this->hasAnyRole($roles) || abort (401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || abort (401,'This action is unauthorized.'); 
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name',$roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('name',$role)->first();
    }

}

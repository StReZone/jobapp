<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'id_user',
        'full_name',
        'gender',
        'pob',
        'address',
        'phone_numb',
        'p_profile',
        'upload_cv'
    ];
    public static function valid()
    {
        return array(
            'full_name' => 'required',
            'Ppob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone_numb' => 'required',
        );
    }
    public function user()
    {
        return $this->hasOne('App\user','id_user');
    }
    public function eduBackground()
    {
        return $this->hasMany('App\EduBackground','id_app');
    }
    public function workExp()
    {
        return $this->hasMany('App\WorkExp','id_app');
    }
}

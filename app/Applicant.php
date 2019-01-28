<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
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
        $this->hasOne('App\user','id_user');
    }
    public function eduBackground()
    {
        $this->hasMany('App\EduBackground','id');
    }
    public function workExp()
    {
        $this->hasMany('App\WorkExp','id_app');
    }
}

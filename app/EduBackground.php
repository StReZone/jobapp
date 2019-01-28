<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduBackground extends Model
{
    protected $fillable = [
        'id_app',
        'years',
        'institution',
        'level',
        'gpa'
    ];
    public function applicant()
    {
        $this->belongTo('App\Applicant','id_app');
    }
}

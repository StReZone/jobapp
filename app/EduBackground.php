<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduBackground extends Model
{
    public function applicant()
    {
        $this->belongTo('App\Applicant','id_app');
    }
}

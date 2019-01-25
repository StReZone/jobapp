<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExp extends Model
{
    public function applicant()
    {
        $this->belongTo('App\Applicant','id_app');
    }
}

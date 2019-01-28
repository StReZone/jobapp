<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExp extends Model
{
    protected $fillable = [
        'id_app',
        'years2',
        'company',
        'position'
    ];
    public function applicant()
    {
        $this->belongTo('App\Applicant','id_app');
    }
}

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
        return $this->belongsTo('App\Applicant','id_app');
    }
}

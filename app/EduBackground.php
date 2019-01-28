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
        return $this->belongsTo('App\Applicant','id_app');
    }
}

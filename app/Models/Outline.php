<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outline extends Model
{
    //
    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'course_id');
    }
}

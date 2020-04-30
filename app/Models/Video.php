<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'course_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function source()
    {
        return $this->belongsTo('App\Models\Source', 'source_id', 'source_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function video()
    {
        return $this->hasMany('App\Models\Video', 'course_id', 'course_id');
    }

    public function outline()
    {
        return $this->hasMany('App\Models\Outline', 'course_id', 'course_id');
    }
}

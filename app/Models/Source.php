<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function course()
    {
        return $this->hasMany('App\Models\Course', 'source_id');
    }
}

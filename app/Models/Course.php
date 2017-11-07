<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['instructor_id', 'name', 'description'];

    public function Instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}

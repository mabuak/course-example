<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}

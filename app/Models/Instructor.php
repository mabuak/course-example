<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['name', 'gender'];
    
    public function Course()
    {
        return $this->hasMany(Course::class);
    }
}

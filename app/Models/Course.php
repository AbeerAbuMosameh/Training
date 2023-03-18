<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];

    //1 Course has many Student
    public function Student()
    {
        return $this->hasMany(Course::class);
    }
}

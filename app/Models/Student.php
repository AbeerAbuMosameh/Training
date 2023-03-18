<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];

    //1 student has many Course
    public function Course()
    {
        return $this->hasMany(Student::class);
    }
}

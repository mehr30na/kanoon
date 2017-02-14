<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'father_name',
        'gender',
        'birth_date',
        'mobile',
        'email',
        'student_number',
        'certificate',
        'subject',
        'skill',
        'section',
        'address',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_ID',
        'Khmer_Name',
        'English_Name',
        'Gender',
        'College',
        'Classroom',
        'Short_Course',
        'English_level',
        'IT_level',
        'Working_team',
    ];
}

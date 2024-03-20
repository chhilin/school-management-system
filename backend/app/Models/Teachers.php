<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Teachers extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'khmer_name',
        'english_name',
        'gender',
        'date_of_birth',
        'address',
        'phone_number',
        'email',
        'major',
        'employment_status',
        'hire_date',
        'image'
    ];

    public static function store($request, $id = null)
    {
        // ------------------------createdteacher------------------------
        $teacher = $request->only([
            'teacher_id',
            'khmer_name',
            'english_name',
            'gender',
            'date_of_birth',
            'address',
            'phone_number',
            'email',
            'major',
            'employment_status',
            'hire_date',

        ]);

      
        // ------------------------updateteacher------------------------
        $teacher = self::updateOrCreate(['id' => $id], $teacher);
        

        return $teacher;
    }
}

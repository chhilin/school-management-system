<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        'image_id'
    ];

    public static function list()
    {
        return self::orderBy('created_at', 'desc')->get();
    }

    public static function store($request, $id = null)
    {
        $teacherData = $request->only([
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

        $teacher = self::updateOrCreate(['id' => $id], $teacherData);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = Image::store($request, $teacher->image_id);
            $teacher->image_id = $image->id;
            $teacher->save();
        }

        return $teacher;
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'image_id', 'id');
    }
}

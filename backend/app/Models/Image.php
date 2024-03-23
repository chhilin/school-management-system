<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        // 'image',
        'teacher_id',
        'file_path',
    ];

    public static function store($request, $id = null)
    {
        $data = $request->validate([
            'image' => 'required|image',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/assets/img/images', $filename);

        $data['image'] = $image;
        $data['filename'] = $filename;
        $data['file_path'] = $path;

        if ($id) {
            return self::where('id', $id)->update($data);
        } else {
            return self::create($data);
        }
        // $imagePath = $request->file('image')->store('public/assets/img/images');
        // $data['image'] = str_replace('public/', '', $imagePath);

        // if ($id) {
        //     return self::where('id', $id)->update($data);
        // } else {
        //     return self::create($data);
        // }
    }




    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teachers::class);
    }
}

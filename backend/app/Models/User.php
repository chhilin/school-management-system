<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_ID',
        'Khmer_Name',
        'English_Name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Validate and store user data.
     *
     * @param  array  $request
     * @param  int|null  $id
     * @return array
     */
    public static function store(array $request, $id = null)
    {
        // Validation rules and messages for both update and create operations
        $rules = [
            'Khmer_Name' => 'required|min:1|max:50',
            'English_Name' => 'required|min:1|max:50',
            'email' => 'required|email|unique:users,email,' . ($id ?? 'NULL'),
            'password' => $id ? 'nullable|min:8' : 'required|min:8', // Make password field nullable for updates
        ];

        $messages = [
            'Khmer_Name.required' => 'Please enter the Khmer_Name',
            'English_Name.required' => 'Please enter the English_Name',
            'email.required' => 'Please enter your email',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be 8 characters long',
        ];

        // Validate the request data
        $validatedData = \Validator::make($request, $rules, $messages)->validate();

        // Prepare user data
        $user = [
            'user_ID' => $request['user_ID'],
            'Khmer_Name' => $request['Khmer_Name'],
            'English_Name' => $request['English_Name'],
            'email' => $request['email'],
        ];

        // Update password only if it is present in the request
        if (isset($request['password'])) {
            $user['password'] = Hash::make($request['password']);
        }

        return $user;
    }
}

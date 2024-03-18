<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function store($request, $id = null)
    {
        // Validation rules and messages for both update and create operations
        $rules = [
            'username' => 'required|min:1|max:50',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => $id ? 'nullable|min:8' : 'required|min:8', // Make password field nullable for updates
        ];

        $messages = [
            'username.required' => 'Please enter the username',
            'email.required' => 'Please enter your email',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be 8 characters long',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules, $messages);

        // Prepare user data
        $user = $request->only('username', 'email');

        // Update password only if it is present in the request
        if ($request->filled('password')) {
            $user['password'] = Hash::make($request->password);
        }
        return $user;
    }
}

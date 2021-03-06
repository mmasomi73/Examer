<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'about',
        'avatar',
        'birthday',
        'cover',
        'status',
        'color',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday' => 'date',
    ];

    public function avatarUrl()
    {
        if (empty($this->avatar))
            return \Storage::disk('avatars')->url('1740668454888131528.jpg');
        return \Storage::disk('avatars')->url($this->avatar);
    }
    public function coverUrl()
    {
        if (empty($this->avatar))
            return \Storage::disk('covers')->url('1740668454888131528.jpg');
        return \Storage::disk('covers')->url($this->cover);
    }
}

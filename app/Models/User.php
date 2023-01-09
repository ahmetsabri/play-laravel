<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Builder;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Prunable;

    protected $guarded = [];

    protected $casts = [
        'data' => 'array'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function scopeOrdersCount(Builder $builder,  $min , $max)
    {

        $builder->whereBetween('orders',[$min, $max]);
    }
}

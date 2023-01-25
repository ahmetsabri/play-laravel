<?php

namespace App\Models;

use App\Casts\HumanDate;
use App\Casts\HumanDateCast;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    //string ,array, datetime, boolean ,timestamp, decimal, integer, withCasts, Custom cast

    protected $casts = [
        'published_at' =>  HumanDateCast::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getTagsAttribute()
    // {
    //     return json_decode($this->attributes['tags'],1);
    // }
}

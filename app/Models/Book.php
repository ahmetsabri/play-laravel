<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function books()
    {
        return $this->hasMany(self::class, 'category_id');
    }

    public function category()
    {
        return $this->belongsTo(self::class,'parent_id');
    }
}

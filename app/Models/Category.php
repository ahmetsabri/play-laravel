<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Category extends Pivot
{
    protected $table = 'categories';

    public function category()
    {
        return $this->belongsTo(Book::class, 'category_id');
    }

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id');
    }

    public function subCategories()
    {
        return $this->hasMany(self::class,'parent_id')->with('books','category');
    }
}

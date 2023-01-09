<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder {

    public function scopeActive()
    {
        $this->where('active', 1);
    }

    public function inActive()
    {
       return $this->where('active', 0);
    }

    public function likes( $value)
    {
       return $this->where('likes', '>', $value);
    }

    public function dislikes( $value)
    {
       return $this->where('likes', '>', $value);
    }

    public function byUser( $user_id)
    {
        return $this->where('user_id', $user_id);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Horizon\Tags;

class TagController extends Controller
{
    public function __invoke(Request $request)
    {
        $tags = [
            ['tag' => 'Laravel', 'is_active'=>1],
            ['tag' => 'PHP', 'is_active'=>0],
            ['tag' => 'HTML','is_active'=>0],
            ['tag' => 'CSS','is_active'=>0],
        ];


        Tag::query()->upsert($tags,['tag'],['is_active']);


        return 'Done';
    }
}

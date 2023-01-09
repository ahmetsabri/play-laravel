<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return response()->json(compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->fill($request->validated());

        $post->save();

        return response()->json(compact('post'));
    }
}

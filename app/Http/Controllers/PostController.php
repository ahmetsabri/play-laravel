<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(1);

        return view('index',compact('posts'));
    }

    public function delete(Post $post)
    {

        $redirectTo = request()->query('redirect_to',route('home'));

        $post->delete();

        return redirect()->to($redirectTo);
    }
}

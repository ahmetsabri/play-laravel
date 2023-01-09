<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ListPostsController extends Controller
{
    public function __invoke()
    {
        // Get User with last inserted post

        $user = User::find(2)->load('mostLikedActivePost');

        return $user;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::withSum('posts as likes_sum','likes')->withAvg('posts as likes_avg', 'likes')->paginate();
        return  UserResource::collection($users);
    }
}

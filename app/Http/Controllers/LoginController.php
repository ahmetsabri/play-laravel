<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $users = User::take(5)->get();

        $requests = auth()->user()->friendRequests()->pluck('friend_id')->toArray();
        $sentRequests = auth()->user()->sentRequests()->pluck('user_id')->toArray();

        $myFriends = auth()->user()->myFriends;
        return view('welcome', compact('users', 'requests', 'myFriends','sentRequests'));
    }

    public function login(User $user)
    {
        Auth::loginUsingId($user->id, true);

        request()->session()->regenerate();

        $requests = auth()->user()->friendRequests()->pluck('friend_id')->toArray();

        return back()->with(compact('requests'));
    }
}

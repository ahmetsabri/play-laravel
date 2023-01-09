<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function sendFriendRequest(User $user)
    {
        $user->friends()->sync(auth()->id());

        return back();
    }

    public function reject(User $user)
    {
        auth()->user()->friends()->detach($user->id);

        return back();
    }

    public function accept(User $user)
    {
        auth()->user()->friends()->updateExistingPivot($user->id, [
            'status' => 'accepted',
            'friends_since' => now()->toDateString()
        ]);

        $user->friends()->sync([auth()->id() => [
            'status' => 'accepted',
            'friends_since' => now()->toDateString()
        ]]);

        return back();
    }

    public function delete(User $user)
    {

        auth()->user()->friends()->detach($user->id);

        $user->friends()->detach(auth()->id());

        return back();
    }

    public function deleteRequest(User $user)
    {
        auth()->user()->sentRequests()->detach($user->id);

        return back();
    }
}

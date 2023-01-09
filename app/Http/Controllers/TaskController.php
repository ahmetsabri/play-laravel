<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __invoke(Task $task, User $user)
    {

        $task->user()->dissociate()->save();
        return 'updated';
    }
}

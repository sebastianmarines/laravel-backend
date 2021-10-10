<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return Task::all();
    }

    public function create(Request $request)
    {
        $task = new Task();
        $task->text = $request->get('text');
        $task->save();

        return response(200);
    }
}

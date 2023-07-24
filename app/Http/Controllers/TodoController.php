<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $task = new Task;
        $values = Task::all()->toArray();
        $columns = $task->getTableColumns(['created_at', 'updated_at']); // parameter is an array of exception column names
        return view('tasks/todo')->with([
            'columns' => $columns,
            'values' => $values
        ]);
    }
}

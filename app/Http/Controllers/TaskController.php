<?php

namespace App\Http\Controllers;

use App\Models\Tasks;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = Tasks::paginate(10);


        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Tasks::findOrFail($id); // Görev bulunamazsa hata döndürür
        return view('tasks.show', compact('task'));

        $task = Task::with('users')->findOrFail($id);
        return view('tasks.show', compact('task'));
    }



}

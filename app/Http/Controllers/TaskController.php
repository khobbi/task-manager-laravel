<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //will be used to display list of tasks
        $tasks = Task::all(); //retrieves all tasks
        return view('tasks.index', compact('tasks')); //pass tasks to the index view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //to show a form to add a new taks
        return view('tasks.create'); //return the create task view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //to save a new task to the db
        $validated = $request -> validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Task::create($validated); //save the task using Eloquent
        
        return redirect() -> route('tasks.index') //redirects to the tasks list
                        -> with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //to display details about a single task
        $task = Task::findOrFail($id); //find the task with the id or throw a 404 error
        return view('tasks.show', compact('task')); //pass the task to the show view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //to show a form to edit a single task
        $task = Task::findOrFail($id); 
        return view('tasks.edit', compact('task'));//pass the taskto the edit view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //to save changes to an existing task
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
    
        $task = Task::findOrFail($id); // Find the task by ID
        $task->update($validated); // Update the task
    
        return redirect()->route('tasks.index') // Redirect to the tasks list
                         ->with('success', 'Task updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //to delete a task
        $task = Task::findOrFail($id); // Find the task by ID
        $task->delete(); // Delete the task

        return redirect()->route('tasks.index') // Redirect to the tasks list
                         ->with('success', 'Task deleted successfully!');
    }

}

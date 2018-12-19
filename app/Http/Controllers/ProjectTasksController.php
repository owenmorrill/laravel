<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
  public function update(Task $task)
  {
    $task->update([
      'completed' => request()->has('completed')
    ]);

    return back();
  }

  public function store(Project $project)
  {
    //dd(request()->all());
    $project->addTask(request('description'));

    return back();
  }
}

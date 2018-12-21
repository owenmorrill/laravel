<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
  public function store(Project $project)
  {
    request()->validate(['description' => 'required']);

    $project->addTask(request('description'));

    return back();
  }
}

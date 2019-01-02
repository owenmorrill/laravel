<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectCreated;

class ProjectsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $projects = Project::all();

    return view('projects.index', compact('projects'));
  }

  public function create()
  {
    return view('projects.create');
  }

  public function show(Project $project)
  {
    return view('projects.show', compact('project'));
  }

  public function edit(Project $project)
  {
    return view('projects.edit', compact('project'));
  }

  public function update(Project $project)
  {
    //dd(request()->all());
    $attributes = request()->validate([
      'title' => 'required|min:3',
      'description' => 'required',
    ]);

    $attributes['owner_id'] = auth()->id();

    Project::where('id', $project->id)->update($attributes);

    return redirect('/projects/' . $project->id);
  }

  public function destroy(Project $project)
  {
    $project->delete();

    return redirect('/projects');
  }

  public function store()
  {
    $attributes = request()->validate([
      'title' => 'required|min:3',
      'description' => 'required',
    ]);

    $attributes['owner_id'] = auth()->id();

    //return dd($attributes);
    $project = Project::create($attributes);

    Mail::to('owen.morrill@colorado.edu')->send(
      new ProjectCreated($project)
    );

    return redirect('/projects');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public $fillable = [
    'completed',
    'description',
  ];

  public function project()
  {
    return $this->belongsTo(Project::class);
  }
}

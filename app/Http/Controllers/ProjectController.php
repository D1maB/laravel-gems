<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __invoke(Project $project)
    {
        abort_unless($project->isActive(), 404);

        return view('project', compact('project'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $projects = Project::with('categories')
            ->active()
            ->latest()
            ->paginate(2);

        return view('projects', compact('projects'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __invoke(Project $project)
    {
        abort_unless($project->isActive(), 404);

        
        $categories = $project->categories->pluck('id');

        $relatedProjects = Project::with('categories')
            ->active()
            ->whereNot("id", $project->id)
            ->whereHas("categories", function($query) use ($categories){
                $query->whereIn('id', $categories);
            })
            ->latest()
            ->limit(6)
            ->get();


        return view('project', compact('project'), compact('relatedProjects'));
    }
}

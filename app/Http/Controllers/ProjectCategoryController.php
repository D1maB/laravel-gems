<?php

namespace App\Http\Controllers;
use App\Models\ProjectCategory;
use App\Models\Project;

class ProjectCategoryController extends Controller
{
    public function __invoke(ProjectCategory $category)
    {
        $projects = 
            $category
                ->projects()
                ->with('categories')
                ->active()
                ->limit(6)
                ->get();

        return view('project_category', compact('category'), compact('projects'));
    }
}

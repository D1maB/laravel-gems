<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        $projects = Project::with('categories')
            ->active()
            ->latest()
            ->limit(6)
            ->get();

        return view('home', compact('projects'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(Listing $project)
    {

        //dd(Listing::active()->count());

        //dd(asset('storage/'.$project->preview_image));

        abort_unless($project->isActive(), 404);

        return view('project', compact('project'));
    }
}

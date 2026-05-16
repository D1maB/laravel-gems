<?php

namespace App\Http\Controllers;
use App\Models\Project;

class SubmitProjectController extends Controller
{
    public function index()
    {
        return view('submit_project');
    }

    public function handle()
    {
        dd(request()->all());
        return view('submit_project');
    }
}

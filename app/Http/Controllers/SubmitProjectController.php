<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Http\Requests\SubmitProjectRequest;
use Illuminate\Support\Str;

class SubmitProjectController extends Controller
{
    public function index()
    {
        $categories = ProjectCategory::all();

        return view('submit_project', compact('categories'));
    }

    public function handle(SubmitProjectRequest $request)
    {
        //dd($request->validated());

        $data = $request->validated();

        $path = null;
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('preview_image')) {
            $path = $request->file('preview_image')->store('projects', 'public');
            $data['preview_image'] = $path;
        }

        $category = $data['category'];


        unset($data['category']);

        $project = Project::create($data);

        /*
        $project = Project::create([
            'title' => $data->title,
            'website_url' => $data->website_url,
            'github_url' => $data->github_url,
            'website_url' => $data->website_url,

            'preview_image' => $preview_image,
        ]);
        */

        $project->categories()->attach($category);


        //Project::create($data);
        //dd($data);

        //$preview_image = $request->file('preview_image')->store('projects', 'public');

        //$project = Project::make($data); 
        //$project->preview_image = $preview_image;

        //$project->save();


        //session()->flash('message', 'Your data has been saved successfully!');
        return redirect()->back()->with('message', 'Project submitted successfully');

        //return view('submit_project');
    }
}

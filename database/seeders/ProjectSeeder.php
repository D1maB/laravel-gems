<?php

namespace Database\Seeders;

use App\Enums\ProjectStatus;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project1 = Project::create([
            'title' => 'Project 1',
            'slug' => 'Project1',
            'description' => 'Project 1 description',
            'short_description' => 'Project 1 s description',
            //'preview_image' => null,
            'status' => ProjectStatus::active,
        ]);

       $project1->categories()->attach([1, 2]);

    }
}

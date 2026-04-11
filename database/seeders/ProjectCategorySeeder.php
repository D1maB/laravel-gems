<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'eloquent',
            'utils'
        ];

        foreach ($tags as $tag) {
            ProjectCategory::create([
                'name' => $tag,
                'slug' => $tag,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\ProjectTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTagSeeder extends Seeder
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
            ProjectTag::create([
                'name' => $tag,
                'slug' => $tag,
            ]);
        }
    }
}

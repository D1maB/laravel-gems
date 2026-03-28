<?php

namespace Database\Seeders;

use App\Models\ListingTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingTagSeeder extends Seeder
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
            ListingTag::create([
                'name' => $tag,
                'slug' => $tag,
            ]);
        }
    }
}

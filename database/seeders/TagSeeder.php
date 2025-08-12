<?php
namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = ['Rituals', 'Vastu', 'Festivals', 'Mantras', 'Spirituality'];
        foreach ($tags as $tag) {
            Tag::create(['name' => $tag, 'slug' => Str::slug($tag)]);
        }
    }
}
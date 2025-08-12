<?php
namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        $tags = Tag::all();

        $posts = [
            [
                'title' => 'The Significance of Diwali Pooja',
                'excerpt' => 'Explore the deep spiritual meaning behind the rituals of Diwali, the festival of lights.',
                'body' => 'Diwali, the festival of lights, is one of the most significant festivals in Hinduism. It symbolizes the victory of light over darkness, good over evil, and knowledge over ignorance. The Diwali pooja, primarily dedicated to Goddess Lakshmi and Lord Ganesha, is the centerpiece of the celebrations.',
            ],
            [
                'title' => 'Vastu Tips for Your Home Temple',
                'excerpt' => 'Learn the ideal placement and setup for your mandir at home to attract positive energy.',
                'body' => 'The home temple, or mandir, is a sacred space. According to Vastu Shastra, its placement and orientation can have a profound impact on the energy and well-being of the household. The ideal direction for a mandir is the North-East, also known as the Ishan corner.',
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create([
                'user_id' => $admin->id,
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'excerpt' => $postData['excerpt'],
                'body' => $postData['body'],
                'status' => 'published',
            ]);

            // Attach 1 to 3 random tags
            $post->tags()->attach($tags->random(rand(1, 3))->pluck('id')->toArray());
        }
    }
}
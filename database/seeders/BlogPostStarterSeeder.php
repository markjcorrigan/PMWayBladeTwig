<?php


namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class BlogPostStarterSeeder extends Seeder
{
    public function run()
    {
        BlogPost::updateOrInsert(['id' => 1], [
            'user_id' => '1',
            'post_title' => 'This is a starter blog post to initialize the system.',
            'post_slug' => 'ThisCanBeRemoved',
            'photo' => 'uploads/blog/post.jpg',
            'post_tags' => 'ThisCanBeRemoved',
            'post_description' => 'The System needs an initial post to allow it to start up correctly.  Once other posts have been added this post can be removed.',
            'created_at' => '2025-08-08 11:00:00',
            'updated_at' => '2025-08-08 11:00:00',
            'approved' => '0',
        ]);
    }
}

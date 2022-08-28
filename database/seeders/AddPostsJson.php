<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddPostsJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("ポストの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/posts.json');
        $posts = json_decode($json, true);

        $count = 0;
        foreach ($posts['posts'] as $post) {
            Post::create($post);
            $count++;
        }

        $this->command->info("ポストを{$count}件、作成しました。");
    }
}

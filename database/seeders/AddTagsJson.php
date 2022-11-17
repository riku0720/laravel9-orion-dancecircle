<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddTagsJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("タグの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/tags.json');
        $tags = json_decode($json, true);

        $count = 0;
        foreach ($tags['tags'] as $tag) {
            Tag::create($tag);
            $count++;
        }

        $this->command->info("タグを{$count}件、作成しました。");
    }
}

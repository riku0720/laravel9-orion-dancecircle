<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddImagesJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("イメージの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/images.json');
        $images = json_decode($json, true);

        $count = 0;
        foreach ($images['images'] as $image) {
            Image::create($image);
            $count++;
        }

        $this->command->info("イメージを{$count}件、作成しました。");
    }
}

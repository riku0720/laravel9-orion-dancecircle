<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUsersJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("チームユーザーの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/users.json');
        $users = json_decode($json, true);

        $count = 0;
        foreach ($users['users'] as $user) {
            User::create($user);
            $count++;
        }

        $this->command->info("チームユーザーを{$count}件、作成しました。");
    }
}

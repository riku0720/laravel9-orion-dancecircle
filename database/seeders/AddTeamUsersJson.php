<?php

namespace Database\Seeders;

use App\Models\Team_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddTeamUsersJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("チームユーザーの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/teamusers.json');
        $teamusers = json_decode($json, true);

        $count = 0;
        foreach ($teamusers['team_users'] as $teamuser) {
            Team_user::create($teamuser);
            $count++;
        }

        $this->command->info("チームユーザーを{$count}件、作成しました。");
    }
}

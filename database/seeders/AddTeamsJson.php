<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddTeamsJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("チームの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/teams.json');
        $teams = json_decode($json, true);

        $count = 0;
        foreach ($teams['teams'] as $team) {
            Team::create($team);
            $count++;
        }

        $this->command->info("チームを{$count}件、作成しました。");
    }
}

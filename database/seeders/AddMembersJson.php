<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test_member;

class AddMembersJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("メンバーの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/members.json');
        $members = json_decode($json, true);

        $count = 0;
        foreach ($members['members'] as $member) {
            Test_member::create($member);
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class AddRolesJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("メンバーの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/roles.json');
        $roles = json_decode($json, true);

        $count = 0;
        foreach ($roles['roles'] as $role) {
            Role::create($role);
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

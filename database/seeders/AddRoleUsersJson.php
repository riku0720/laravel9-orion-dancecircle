<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role_user;

class AddRoleUsersJson extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("ロールユーザーの作成を開始します...");

        $json = file_get_contents(__DIR__ . '/data/role_users.json');
        $role_users = json_decode($json, true);

        $count = 0;
        foreach ($role_users['role_users'] as $role_user) {
            Role_user::create($role_user);
            $count++;
        }

        $this->command->info("ロールユーザーを{$count}件、作成しました。");
    }
}

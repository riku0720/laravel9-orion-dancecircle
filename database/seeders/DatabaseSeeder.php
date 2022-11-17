<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        // ]);

        \App\Models\User::factory(10)->create();
        $this->call(AddMembersJson::class);
        $this->call(AddTagsJson::class);
        $this->call(AddPostsJson::class);
        $this->call(AddImagesJson::class);
        $this->call(AddRolesJson::class);
        $this->call(AddRoleUsersJson::class);
        $this->call(AddTeamsJson::class);
        $this->call(AddTeamUsersJson::class);
        //\App\Models\Post::factory(10)->create();
        \App\Models\Commet::factory(10)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleAndPermissionSeeder::class);
        // \App\Models\User::factory(10)->create();
        $users_json = file_get_contents(__DIR__.'/includes/users.json');

        $users = json_decode($users_json);

        foreach ($users as $user) {
            $profilePicture= Storage::putFile('public/images/profile_pictures', public_path($user->photo));

            // Remove the 'public' prefix from the path
            $profilePicture = str_replace('public/', '', $profilePicture);
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'profile_picture' => $profilePicture,
                'password' => Hash::make('Filament123')
            ])->assignRole($user->role);
        }    
    }
}

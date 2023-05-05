<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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

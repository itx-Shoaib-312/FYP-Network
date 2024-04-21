<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Selection;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

          $this->call(RoleSeeder::class);

          $this->call(AnnouncementSeeder::class);
           
            

        $user1 = new User;
        $user1->name = 'admin';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('admin123');
        $user1->email_verified_at = now();
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->name = 'student';
        $user2->email = 'student@gmail.com';
        $user2->password = Hash::make('student123');
        $user2->email_verified_at = now();
        $user2->save();
        $user2->assignRole('student');

        $user2 = new User;
        $user2->name = 'supervisor';
        $user2->email = 'supervisor@gmail.com';
        $user2->password = Hash::make('supervisor123');
        $user2->email_verified_at = now();
        $user2->save();
        $user2->assignRole('supervisor');

        $user2 = new User;
        $user2->name = 'coordinator';
        $user2->email = 'coordinator@gmail.com';
        $user2->password = Hash::make('coordinator123');
        $user2->email_verified_at = now();
        $user2->save();
        $user2->assignRole('coordinator');

    }
}

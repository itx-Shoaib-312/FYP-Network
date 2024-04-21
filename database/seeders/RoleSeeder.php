<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Reset cached roles and permissions
      app()['cache']->forget('spatie.permission.cache');

        // Create roles if they don't exist
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }

        if (!Role::where('name', 'student')->exists()) {
            Role::create(['name' => 'student']);
        }

        if (!Role::where('name', 'supervisor')->exists()) {
            Role::create(['name' => 'supervisor']);
        }


        if (!Role::where('name', 'coordinator')->exists()) {
            Role::create(['name' => 'coordinator']);

        }
    }
}

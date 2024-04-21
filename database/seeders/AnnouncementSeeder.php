<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 dummy announcements
        for ($i = 0; $i < 5; $i++) {
            Announcement::create([
                'message' => 'Sample Announcement ' . ($i + 1),
            ]);
        }
    }
}

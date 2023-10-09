<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\wahana;
use App\Models\About;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fauzi Ramdani',
            'email' => 'fauziramdani234@gmail.com',
            'password' => bcrypt('22121995')
        ]);
        Wahana::factory(5)->create();

        About::create([
            'image' => 'gambarr.jpg',
            'tiket' => '20000',
            'hari_buka' => 'Setiap Hari',
            'jam_buka' => '08.00 - 17.00 wib',
            'no_whatsapp' => '08559761805',
            'email' => 'kampoengciherang@gmail,com',
            'about' => 'bismillah'
        ]);
            
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

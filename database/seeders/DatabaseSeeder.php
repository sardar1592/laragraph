<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        
        $events = \App\Models\Event::factory(10)->create();

        $events->each(function ($event) {
            $event->speakers()->saveMany(\App\Models\Speaker::factory(3)->make());
        });
    }
}

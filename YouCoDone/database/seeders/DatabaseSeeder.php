<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Favorite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::factory(10)->create();

        Restaurant::factory(5)->has(Menu::factory(2)->hasAttached(MenuItem::factory()))>create();

        Favorite::factory(10)->create();
    }
}
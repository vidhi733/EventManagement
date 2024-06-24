<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'India']);
        Country::create(['name' => 'United States']);

        City::create(['country_id' => 1, 'name' => 'Ahmedabad']);
        City::create(['country_id' => 1, 'name' => 'Surat']);
        City::create(['country_id' => 1, 'name' => 'Mumbai']);
        City::create(['country_id' => 1, 'name' => 'Pune']);
        City::create(['country_id' => 1, 'name' => 'Udaipur']);
        City::create(['country_id' => 1, 'name' => 'Jaipur']);
        City::create(['country_id' => 2, 'name' => 'Sacramento']);
        City::create(['country_id' => 2, 'name' => 'Los Angeles']);
        City::create(['country_id' => 2, 'name' => 'Albany']);
        City::create(['country_id' => 2, 'name' => 'New York City']);
        City::create(['country_id' => 2, 'name' => 'Austin']);
        City::create(['country_id' => 2, 'name' => 'Houston']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Filament', 'slug' => 'filament']);
        Tag::create(['name' => 'PHP', 'slug' => 'php']);
    }
}

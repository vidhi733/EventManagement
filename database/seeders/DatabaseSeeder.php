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

        State::create(['Country_id' => 1, 'name' => 'Gujarat']);
        State::create(['Country_id' => 1, 'name' => 'Maharashtra']);
        State::create(['Country_id' => 1, 'name' => 'Rajasthan']);
        State::create(['Country_id' => 2, 'name' => 'California']);
        State::create(['Country_id' => 2, 'name' => 'New York']);
        State::create(['Country_id' => 2, 'name' => 'Texas']);

        City::create(['state_id' => 1, 'name' => 'Ahmedabad']);
        City::create(['state_id' => 1, 'name' => 'Surat']);
        City::create(['state_id' => 2, 'name' => 'Mumbai']);
        City::create(['state_id' => 2, 'name' => 'Pune']);
        City::create(['state_id' => 3, 'name' => 'Udaipur']);
        City::create(['state_id' => 3, 'name' => 'Jaipur']);
        City::create(['state_id' => 4, 'name' => 'Sacramento']);
        City::create(['state_id' => 4, 'name' => 'Los Angeles']);
        City::create(['state_id' => 5, 'name' => 'Albany']);
        City::create(['state_id' => 5, 'name' => 'New York City']);
        City::create(['state_id' => 6, 'name' => 'Austin']);
        City::create(['state_id' => 6, 'name' => 'Houston']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Filament', 'slug' => 'filament']);
        Tag::create(['name' => 'PHP', 'slug' => 'php']);
    }
}

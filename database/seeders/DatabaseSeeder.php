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
            'name' => 'Vidhi',
            'email' => 'vidhi@example.com',
        ]);

        // Country::create(['name' => 'India']);
        // Country::create(['name' => 'United States']);
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class
        ]);

        // City::create(['country_id' => 101, 'name' => 'Ahmedabad']);
        // City::create(['country_id' => 101, 'name' => 'Surat']);
        // City::create(['country_id' => 101, 'name' => 'Mumbai']);
        // City::create(['country_id' => 101, 'name' => 'Pune']);
        // City::create(['country_id' => 101, 'name' => 'Udaipur']);
        // City::create(['country_id' => 101, 'name' => 'Jaipur']);

        // City::create(['country_id' => 231, 'name' => 'Sacramento']);
        // City::create(['country_id' => 231, 'name' => 'Los Angeles']);
        // City::create(['country_id' => 231, 'name' => 'Albany']);
        // City::create(['country_id' => 231, 'name' => 'New York City']);
        // City::create(['country_id' => 231, 'name' => 'Austin']);
        // City::create(['country_id' => 231, 'name' => 'Houston']);

        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'Filament', 'slug' => 'filament']);
        Tag::create(['name' => 'PHP', 'slug' => 'php']);
    }
}

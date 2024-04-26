<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@example.com',
//            'password' => Hash::make('password'),
//        ]);

        $this->call([
            UserSeeder::class,
        ]);


    }
}

<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Campus Seeder
        DB::table('campuses')->insert([
            [
                'name' => 'Sylhet Engineering Collage',
            ],
            [
                'name' => 'Maymonshing Engineering Collage',
            ],
            [
                'name' => 'Foridpur Engineering Collage',
            ]
        ]);

        // User Seeder Seeder
        DB::table('users')->insert([
            [
                'campus_id' => 1,
                'name' => 'Teacher 1',
                'email' => 'teacher1@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 2,
                'name' => 'Teacher 2',
                'email' => 'teacher2@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 3,
                'name' => 'Teacher 3',
                'email' => 'teacher3@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 1,
                'name' => 'Teacher 4',
                'email' => 'teacher4@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 2,
                'name' => 'Teacher 5',
                'email' => 'teacher5@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 3,
                'name' => 'Teacher 5',
                'email' => 'teacher6@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 1,
                'name' => 'Teacher 7',
                'email' => 'teacher7@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 2,
                'name' => 'Teacher 8',
                'email' => 'teacher8@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 3,
                'name' => 'Teacher 9',
                'email' => 'teacher9@gmail.com',
                'password' => Hash::make(12345678),
            ],
            [
                'campus_id' => 1,
                'name' => 'Teacher 10',
                'email' => 'teacher10@gmail.com',
                'password' => Hash::make(12345678),
            ]
        ]);
    }
}

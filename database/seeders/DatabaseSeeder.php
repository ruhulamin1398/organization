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




        DB::table('roles')->insert(
            [
                [
                    'name' => 'central_admin',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'campus_admin',
                    'guard_name' => 'web',
                ], [
                    'name' => 'teacher',
                    'guard_name' => 'web',
                ],
            ]
        );



        // User Seeder Seeder
        DB::table('users')->insert([
            [
                'campus_id' => 4,
                'phone' => \Faker\Factory::create()->phoneNumber,
                'name' => 'Central Admin',
                'email' => 'central@gmail.com',
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' => \Faker\Factory::create()->phoneNumber,
                'name' => 'Sec Admin',
                'email' => 'sec@gmail.com',
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 2,
                'phone' => \Faker\Factory::create()->phoneNumber,
                'name' => 'Mec Admin',
                'email' => 'mec@gmail.com',
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 3,
                'phone' => \Faker\Factory::create()->phoneNumber,
                'name' => 'Fec Admin',
                'email' => 'fec@gmail.com',
                'password' => Hash::make(1234),
            ],
            ///////////////////////////////
            [
                'campus_id' => 1,
                'phone' => '21548765',
                'name' => 'sec_teacher',
                'email' => 'sec_teacher@gmail.com',
                'password' => Hash::make(1234),
            ],


            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
            [
                'campus_id' => 1,
                'phone' =>\Faker\Factory::create()->phoneNumber,
                'name' =>\Faker\Factory::create()->name,
                'email' => \Faker\Factory::create()->email,
                'password' => Hash::make(1234),
            ],
          
          
        ]);




        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\Models\User',
                'model_id' => 1,
            ],
            
            ///// campus admin
            [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 2,
            ], [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 3,
            ], [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 4,
            ], 
            
            
            // teachers 
            
            [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 5,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 6,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 7,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 8,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 9,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 10,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 11,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 12,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 13,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 14,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 15,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 16,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 17,
            ],
        ]);
    }
}

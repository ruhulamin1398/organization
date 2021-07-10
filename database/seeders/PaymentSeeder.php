<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Payment Add

        DB::table('payments')->insert([
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 6,
                'month' => 3,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 7,
                'month' => 3,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 8,
                'month' => 5,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 9,
                'month' => 2,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 10,
                'month' => 6,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 11,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 12,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 13,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 14,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 15,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 16,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 17,
                'month' => 4,
                'year' => 2021,
                'amount' => 500,
            ],
            [
                'campus_id' => 1,
                'type' => 'campus',
                'user_id' => 18,
                'month' => 3,
                'year' => 2021,
                'amount' => 500,
            ],
        ]);
    }
}

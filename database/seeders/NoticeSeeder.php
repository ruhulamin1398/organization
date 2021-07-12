<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Notice::factory()->count(15)->create();

        // for($i = 0; $i < 15; $i++){
        //     DB::table('notices')->insert([
        //          'campus_id' => 1,
        //          'title' => \Faker\Factory::create()->title(),
        //          'description' => \Faker\Factory::create()->sentence(20),
        //          'file' => \Faker\Factory::create()->file(),
        //     ]);
        // }

        $sql = "INSERT INTO `notices` (`id`, `campus_id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
        (1, 1, 'Notice One', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'e6f912153b66e39d213dc8e898164916.pdf', '2021-07-12 01:34:54', '2021-07-12 01:34:54'),
        (2, 1, 'Notice Two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '14aadcc1693840afc0aec646619150f3.pdf', '2021-07-12 01:35:27', '2021-07-12 01:35:27'),
        (3, 1, 'Notice Three', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '4fcaede6d616d9bf56a14ffbdd726dbc.pdf', '2021-07-12 01:35:54', '2021-07-12 01:35:54'),
        (4, 1, 'Notice Four', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '53d119b88e195d6f1a9c8effb0a7199b.pdf', '2021-07-12 01:36:18', '2021-07-12 01:36:18'),
        (5, 1, 'Notice Five', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '6f3bfd50c290f91ccd9180972d1b26b1.pdf', '2021-07-12 01:36:37', '2021-07-12 01:36:37'),
        (6, 1, 'Notice Six', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '3b35dabfbfa5689265175ea5a8000414.pdf', '2021-07-12 01:36:57', '2021-07-12 01:36:57'),
        (7, 1, 'Notice Seven', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '20c82f685d6fa5142ce0e13947f64260.pdf', '2021-07-12 01:37:19', '2021-07-12 01:37:19'),
        (8, 1, 'Notice Eight', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'dbf40d50ded240cd8ce86acbab20d8a3.pdf', '2021-07-12 01:37:38', '2021-07-12 01:37:38'),
        (9, 1, 'Notice nine', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', '71524dafaae2577b0b24d35e455cae3a.pdf', '2021-07-12 01:37:59', '2021-07-12 01:37:59'),
        (10, 1, 'Notice Ten', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'c2cdf332e327fd3653d5a1a189aa59cf.pdf', '2021-07-12 01:38:17', '2021-07-12 01:38:17')";

        DB::select($sql);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'newsid' => 100,
            'headline' => 'Test 1',
            'articletext' => 'Testing the first article.',
            'author' => 'Arbnor Tefiki',
            'isactive' => true,
            'datecreated' => '2023-12-10',
            'priority' => 1,
        ]);
        DB::table('articles')->insert([
            'newsid' => 101,
            'headline' => 'Test 2',
            'articletext' => 'Testing the second article.',
            'author' => 'Sabrije Tefiki',
            'isactive' => true,
            'datecreated' => '2023-12-11',
            'priority' => 1,
        ]);
        DB::table('articles')->insert([
            'newsid' => 103,
            'headline' => 'Test 3',
            'articletext' => 'Testing the third article.',
            'author' => 'Mergime Tefiki',
            'isactive' => false,
            'datecreated' => '2023-11-11',
            'priority' => 2,
        ]);
        DB::table('articles')->insert([
            'newsid' => 104,
            'headline' => 'Test 4',
            'articletext' => 'Testing the fourth article.',
            'author' => 'Rinor Tefiki',
            'isactive' => false,
            'datecreated' => '2022-07-24',
            'priority' => 3,
        ]);
        DB::table('articles')->insert([
            'newsid' => 105,
            'headline' => 'Test 1',
            'articletext' => 'Testing the fifth article.',
            'author' => 'Lazi Tefiki',
            'isactive' => true,
            'datecreated' => '2023-11-30',
            'priority' => 2,
        ]);
    }
}

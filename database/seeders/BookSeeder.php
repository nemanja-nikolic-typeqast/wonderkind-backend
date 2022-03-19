<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = "id";
        $title = "title";
        $short_description = "short_description";
        $amount = "amount";
        $author_id = "author_id";
        $created_at = "created_at";

        DB::table('books')->insert([
            [
                $id => 1,
                $title => 'Angels & Demons',
                $short_description => 'empty',
                $amount => 2,
                $author_id => 1,
                $created_at => now(),
            ],
            [
                $id => 2,
                $title => 'Da Vinci code',
                $short_description => 'empty',
                $amount => 1,
                $author_id => 1,
                $created_at => now(),
            ],
            [
                $id => 3,
                $title => 'GodFather',
                $short_description => 'empty',
                $amount => 1,
                $author_id => 2,
                $created_at => now(),
            ],
            [
                $id => 4,
                $title => 'Awaken at 5am',
                $short_description => 'empty',
                $amount => 11,
                $author_id => 3,
                $created_at => now(),
            ],
        ]);
    }
}

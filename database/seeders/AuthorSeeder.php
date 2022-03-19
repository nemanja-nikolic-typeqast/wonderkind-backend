<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = "id";
        $first_name = "first_name";
        $last_name = "last_name";
        $created_at = "created_at";

        DB::table('authors')->insert([
            [
                $id => 1,
                $first_name => 'Den',
                $last_name => 'Brown',
                $created_at => now(),
            ],
            [
                $id => 2,
                $first_name => 'Mario',
                $last_name => 'Puzo',
                $created_at => now(),
            ],
            [
                $id => 3,
                $first_name => 'Robin',
                $last_name => 'Sharma',
                $created_at => now(),
            ],
        ]);
    }
}

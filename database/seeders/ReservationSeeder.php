<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = "id";
        $book_id = "book_id";
        $email = "email";
        $quantity = "quantity";
        $created_at = "created_at";

        DB::table('reservations')->insert([
            [
                $id => 1,
                $book_id => 1,
                $email => 'email1@gmail.com',
                $quantity => 1,
                $created_at => now(),
            ],
            [
                $id => 2,
                $book_id => 1,
                $email => 'email2@gmail.com',
                $quantity => 2,
                $created_at => now(),
            ],
            [
                $id => 3,
                $book_id => 2,
                $email => 'email3@gmail.com',
                $quantity => 4,
                $created_at => now(),
            ],
            [
                $id => 4,
                $book_id => 3,
                $email => 'email4@gmail.com',
                $quantity => 111,
                $created_at => now(),
            ],
        ]);
    }
}

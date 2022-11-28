<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            DB::table('book_categories')->insert([
                'book_id' => $i,
                'category_id' => rand(1, 3)
            ]);

            DB::table('book_categories')->insert([
                'book_id' => $i,
                'category_id' => rand(4, 6)
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Comedy'
        ]);

        DB::table('categories')->insert([
            'name' => 'Fantasy'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Sci-Fi'
        ]);

        DB::table('categories')->insert([
            'name' => 'Action'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Mystery'
        ]);

        DB::table('categories')->insert([
            'name' => 'Horror'
        ]);

        DB::table('categories')->insert([
            'name' => 'Romance'
        ]);
    }
}

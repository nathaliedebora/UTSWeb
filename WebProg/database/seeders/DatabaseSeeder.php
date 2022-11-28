<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PublisherSeeder::class
        ]);

        \App\Models\Book::factory(6)->create();

        $this->call([BookCategorySeeder::class]);
    }
}

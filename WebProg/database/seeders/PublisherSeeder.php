<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => 'Gramedia Pustaka',
            'address' => 'Palmerah, Jakarta - Indonesia',
            'phone' => '02153629344',
            'email' => 'redaksi@gramediapustakautama.id',
            'image' => 'https://gpu.id/images/logo-gpu.svg?id=c240c063cdb73016a82ad6f5f02e6513'
        ]);

        DB::table('publishers')->insert([
            'name' => 'Scott Mccoppin',
            'address' => '67 3rd St.Phillipsburg',
            'phone' => '785283746234',
            'email' => 'consumercare@scott.com',
            'image' => 'https://www.library.yorku.ca/web/scott/wp-content/themes/york2020/images/yorku-logo.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'Amazon Books',
            'address' => '4601 26th Avenue NE. ',
            'phone' => '7653013274',
            'email' => ' info@amazon.com',
            'image' => 'https://www.tripfiction.com/wp-content/uploads/2016/08/1920x1080-brands-amazon-logo.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => 'HarperCollins',
            'address' => '29836 NewYork',
            'phone' => '8761028334',
            'email' => 'harper@collins.com',
            'image' => 'https://mma.prnewswire.com/media/1306114/HarperCollins_Leadership_Logo.jpg?p=publish'
        ]);

    }
}

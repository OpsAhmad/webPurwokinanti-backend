<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = collect([
            [
                'title' => 'Portal kelurahan purwokinanti',
                'location' => 'general_title'
            ],
            [
                'image' => 'favicon',
                'location' => 'general_favicon'
            ],
            [
                'title' => 'Kelurahan Purwokinanti',
                'description' => 'Portal Informasi berita dan Data Kependudukan di lingkungan RW 07 Purwanggan

                RW 07 Purwanggan, Kelurahan Purwokinanti, Kecamatan Pakualaman,Yogyakarta, DIY
                
                Kontak :
                No HP : 08995089179
                Email :saiful11411@gmail.com',
                'location' => 'general_footer'
            ],
            [
                'image' => 'public/Pages/taman-sari.jpg',
                'title' => 'Kelurahan Purwokinanti',
                'description' => 'Selamat datang di portal informasi kelurahan purwokinanti, Mari kita bangun bersama!',
                'location' => 'home_jumbotron'
            ],
            [
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet non ipsum assumenda, explicabo praesentium nulla nobis animi velit enim adipisci sunt eaque ad asperiores maxime iusto eius soluta nesciunt deleniti? Ab fugit itaque saepe quasi omnis distinctio neque qui molestiae at illo! Consequuntur alias nihil odio quia nostrum in optio maxime, mollitia molestias sequi facere in ducimus quisquam soluta iusto dicta magni qui delectus asperiores dolores. Error quam rem, necessitatibus asperiores sit iure recusandae ipsum quia.totam laudantium inventore! Cumque esse quisquam aspernatur! Exercitationem eius est totam ducimus animi tenetur sapiente. Illum reprehenderit fuga ad delectus nisi labore sint dolor voluptates error. Optio deserunt cum ducimus laborum delectus magnam deleniti repudiandae nesciunt doloribus, fugiat voluptatem sit tempore! Molestias velit officia dignissimos minima necessitatibus provident numquam, hic ipsam corporis voluptatibus, eaque dolor rem laboriosam inventore eveniet commodi. Quam voluptatibus quidem commodi illo',
                'location' => 'home_about'
            ],

        ]);

        $data->each(function ($data) {
            Page::create($data);
        });

        Storage::deleteDirectory('public/Pages');
        Storage::copy('public/imageSeeder/taman-sari.jpg', 'public/Pages/taman-sari.jpg');
    }
}

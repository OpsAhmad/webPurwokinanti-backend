<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
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
                'thumbnail' => 'foto-pertama.jpg',
                'title' => 'Berita pertama',
                'slug' => 'berita-pertama',
                'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, officiis.',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.'
            ],
            [
                'thumbnail' => 'foto-kedua.jpg',
                'title' => 'Berita kedua',
                'slug' => 'berita-kedua',
                'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, officiis.',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.'
            ],
        ]);
        // Lets insert to database
        $data->each(function ($data) {
            Berita::create($data);
        });

        // hapus direktori dulu sebelum dimasukan foto agar tidak error
        Storage::deleteDirectory('public/News');
        // lets move our image seeder
        Storage::copy('public/imageSeeder/seeder1.jpg', 'public/News/foto-pertama.jpg');
        Storage::copy('public/imageSeeder/seeder2.jpg', 'public/News/foto-kedua.jpg');
    }
}

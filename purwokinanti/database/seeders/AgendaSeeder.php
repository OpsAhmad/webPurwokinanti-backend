<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
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
                'title' => 'Agenda pertama',
                'slug' => 'agenda-pertama',
                'time' => '08:00',
                'date' => '2020-10-09',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.',
                'location' => 'rumah pak lontong',
            ],
            [
                'title' => 'Agenda kedua',
                'slug' => 'agenda-kedua',
                'time' => '22:00',
                'date' => '2020-12-09',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum eum, voluptatem sit, totam nisi blanditiis beatae, provident distinctio fugit numquam harum similique maxime molestias necessitatibus nobis doloremque impedit est. Maiores, rem. Voluptate ad repudiandae nisi delectus maxime dolorem, mollitia quibusdam labore id sunt veritatis neque consequatur quis illum, quas, ullam saepe perspiciatis enim voluptates pariatur cupiditate! Eum deleniti exercitationem numquam quisquam recusandae illum. Saepe sequi at ipsum quibusdam quidem, hic fugit tenetur deleniti nobis. Eaque cupiditate ad optio dignissimos! Veritatis, pariatur repudiandae. Nemo quod, laudantium expedita dolores veniam porro cumque? Vel earum rem voluptates laboriosam labore praesentium culpa consectetur deleniti.',
                'location' => 'rumah pak bupati',
            ],
        ]);
        // Lets insert to database
        $data->each(function ($data) {
            Agenda::create($data);
        });
    }
}

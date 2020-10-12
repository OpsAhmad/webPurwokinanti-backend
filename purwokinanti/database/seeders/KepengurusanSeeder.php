<?php

namespace Database\Seeders;

use App\Models\Kepengurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class KepengurusanSeeder extends Seeder
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
                'avatar' => 'public/Kepengurusan/profile-default.jpg',
                'name' => 'Pak surya',
                'position' => 'Lurah',
                'priority' => 1,

            ]
        ]);
        $data->each(function ($data) {
            Kepengurusan::create($data);
        });

        // hapus direktori dulu sebelum dimasukan foto agar tidak error
        Storage::deleteDirectory('public/Kepengurusan');
        // mari kita masuka gambar seeder kita
        Storage::copy('public/imageSeeder/profile-default.jpg', 'public/Kepengurusan/profile-default.jpg');
    }
}

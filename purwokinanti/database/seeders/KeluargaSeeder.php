<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use Illuminate\Database\Seeder;

class KeluargaSeeder extends Seeder
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
                'kependudukan_id' => 1,
                'KB' => 'Pil',
                'KS' => 'Tidak terdaftar',
                'PUS' => 'Hamil',
            ],
            [
                'kependudukan_id' => 4,
                'KB' => 'Implant',
                'KS' => 'BKB',
                'PUS' => 'TIAL',
            ],
        ]);
        $data->each(function ($data) {
            Keluarga::create($data);
        });
    }
}

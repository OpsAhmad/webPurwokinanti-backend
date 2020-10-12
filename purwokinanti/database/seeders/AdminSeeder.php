<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminSeeder extends Seeder
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
                'avatar' => 'public/Admin/profile-default.jpg',
                'username' => 'superadmin',
                'password' => bcrypt('jogjapurwokinantioke'),
                'role' => 'superadmin',
            ],
        ]);

        $data->each(function ($data) {
            Admin::create($data);
        });

        Storage::deleteDirectory('public/Admin');
        Storage::copy('public/imageSeeder/profile-default.jpg', 'public/Admin/profile-default.jpg');
    }
}

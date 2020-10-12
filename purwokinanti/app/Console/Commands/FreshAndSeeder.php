<?php

namespace App\Console\Commands;

use Database\Seeders\AdminSeeder;
use Database\Seeders\AgendaSeeder;
use Database\Seeders\KeluargaSeeder;
use Database\Seeders\KepengurusanSeeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\PagesSeeder;
use Database\Seeders\PendudukSeeder;
use Database\Seeders\VisitorSeeder;
use Illuminate\Console\Command;

class FreshAndSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:fresh&seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fresh the migration and seed all tables';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Refresh all migration');
        $this->call('migrate:refresh');
        $this->info('Migration complete');
        $this->info('Seeding all tables');
        $this->call(NewsSeeder::class);
        $this->info('Seeding news tables done...');
        $this->call(AgendaSeeder::class);
        $this->info('Seeding agendas tables done...');
        $this->call(KeluargaSeeder::class);
        $this->info('Seeding keluargas tables done...');
        $this->call(PendudukSeeder::class);
        $this->info('Seeding kependudukans tables done...');
        $this->call(KepengurusanSeeder::class);
        $this->info('Seeding kepengurusans tables done...');
        $this->call(AdminSeeder::class);
        $this->info('Seeding admin tables done...');
        $this->call(VisitorSeeder::class);
        $this->info('Seeding visitor tables done...');
        $this->call(PagesSeeder::class);
        $this->info('Seeding pages tables done...');
        $this->info('Seeding complete');
        $this->info('success');
    }
}

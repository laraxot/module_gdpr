<?php

declare(strict_types=1);

namespace Modules\GDPR\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(GDPRTableSeeder::class);
    }
}

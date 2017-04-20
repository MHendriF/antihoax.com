<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Website::class, 50)->create();
        $this->command->info("Website table seeded is completed :)");
    }
}

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
        //factory(App\Website::class, 50)->create();
        //$this->command->info("Website table seeded is completed :)");

        $this->call('WebSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Website dummy is completed :)");
    }
}

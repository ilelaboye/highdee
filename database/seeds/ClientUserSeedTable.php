<?php

use Illuminate\Database\Seeder;

class ClientUserSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Client::class, 30)->create();
    }
}

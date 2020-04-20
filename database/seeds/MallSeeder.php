<?php

use Illuminate\Database\Seeder;

class MallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mall::class, 4)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('images')->insert([
        'name' => 'bear',
        'location' => '/img/bear.png'
      ]);

      DB::table('images')->insert([
        'name' => 'blank',
        'location' => '/img/blank.png'
      ]);

      DB::table('images')->insert([
        'name' => 'cat',
        'location' => '/img/cat.png'
      ]);

      DB::table('images')->insert([
        'name' => 'monkey',
        'location' => '/img/monkey.png'
      ]);

      DB::table('images')->insert([
        'name' => 'panda',
        'location' => '/img/panda.png'
      ]);

      DB::table('images')->insert([
        'name' => 'pig',
        'location' => '/img/pig.png'
      ]);

      DB::table('images')->insert([
        'name' => 'rabbit',
        'location' => '/img/rabbit.png'
      ]);

      DB::table('images')->insert([
        'name' => 'tiger',
        'location' => '/img/tiger.png'
      ]);



    }
}

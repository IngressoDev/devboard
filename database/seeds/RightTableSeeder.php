<?php

use Illuminate\Database\Seeder;
use App\Right;

class RightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $right1 = new Right();
      $right1->name = 'Administrator';
      $right1->save();
    }
}

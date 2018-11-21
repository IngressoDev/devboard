<?php

use Illuminate\Database\Seeder;
use App\Theme;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $theme = new Theme();
      $theme->name = 'Default';
      $theme->description = 'Default theme';
      $theme->author = 'Ingresso';
      $theme->version = '1.0.0';
      $theme->default = true;
      $theme->save();
    }
}

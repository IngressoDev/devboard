<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Right;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $right1 = Right::where('name', 'Administrator')->first();

      $admin_role = new Role();
      $admin_role->name = 'Administrator';
      $admin_role->save();
      $admin_role->rights()->attach($right1);

      $mod_role = new Role();
      $mod_role->name = 'Moderator';
      $mod_role->save();

      $member_role = new Role();
      $member_role->name = 'Member';
      $member_role->save();
    }
}

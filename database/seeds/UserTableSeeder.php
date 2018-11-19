<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin_role = Role::where('name', 'Administrator')->first();

      $admin = new User();
      $admin->name = 'Administrator';
      $admin->email = 'admin@example.com';
      $admin->password = Hash::make('password');
      $admin->role()->associate($admin_role);
      $admin->save();

      $mod_role = Role::where('name', 'Moderator')->first();

      $mod = new User();
      $mod->name = 'Moderator';
      $mod->email = 'mod@example.com';
      $mod->password = Hash::make('password');
      $mod->role()->associate($mod_role);
      $mod->save();

      $member_role = Role::where('name', 'Member')->first();

      $member = new User();
      $member->name = 'Moderator';
      $member->email = 'member@example.com';
      $member->password = Hash::make('password');
      $member->role()->associate($member_role);
      $member->save();
    }
}

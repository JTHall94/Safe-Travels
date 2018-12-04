<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $jacob = \App\User::where('name', 'Jacob')->first();
      $bob = \App\User::where('name', 'Bob')->first();

      $temp = new \App\Profile;
      $temp->user_id = $jacob->id;
      $temp->name = 'Jacob Hall';
      $temp->email = 'jacobthall94@gmail.com';
      $temp->phone= '+18594571050';
      $temp->save();
    }
}

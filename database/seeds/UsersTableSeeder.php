<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $jacob = new \App\User;
      $jacob->name = 'Jacob';
      $jacob->email = 'jacobthall94@gmail.com';
      $jacob->password = bcrypt('jacob');
      $jacob->save();

      $bob = new \App\User;
      $bob->name = 'Bob';
      $bob->email = 'bob@bob.bob';
      $bob->password = bcrypt('bob');
      $bob->save();
    }
}

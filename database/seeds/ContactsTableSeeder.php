<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
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

          $temp = new \App\Contacts;
          $temp->user_id = $jacob->id;
          $temp->name = 'Gabby';
          $temp->email = 'gahbriellah.rohse@gmail.com';
          $temp->phone= '8595951448';
          $temp->save();
    }
}

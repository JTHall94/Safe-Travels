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

          $trip = \App\Alerts::where('user_id', '$jacob->id')->first();

          $temp = new \App\Contacts;
          $temp->user_id = $jacob->id;
          $temp->firstname = 'Gabby';
          $temp->lastname = 'Martin';
          $temp->email = 'gahbriellah.rohse@gmail.com';
          $temp->phone= '8595951448';
          $temp->save();

          $hiking->contacts()->attach($temp->id);

          $temp2 = new \App\Contacts;
          $temp2->user_id = $jacob->id;
          $temp2->firstname = 'James';
          $temp2->lastname = 'DeVisser';
          $temp2->email = 'james@james.com';
          $temp2->phone= '8593966898';
          $temp2->save();

          $temp3 = new \App\Contacts;
          $temp3->user_id = $jacob->id;
          $temp3->firstname = 'Kevin';
          $temp3->lastname = 'Moore';
          $temp3->email = 'kevin@nlcd.com';
          $temp3->phone= '2';
          $temp3->save();


    }
}

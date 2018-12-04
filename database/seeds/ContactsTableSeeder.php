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
          $temp->firstname = 'Gabby';
          $temp->lastname = 'Martin';
          $temp->email = 'gahbriellah.rohse@gmail.com';
          $temp->phone= '+18595951448';
          $temp->save();



          $temp2 = new \App\Contacts;
          $temp2->user_id = $jacob->id;
          $temp2->firstname = 'James';
          $temp2->lastname = 'DeVisser';
          $temp2->email = 'james@james.com';
          $temp2->phone= '+18593966898';
          $temp2->save();

          $temp3 = new \App\Contacts;
          $temp3->user_id = $jacob->id;
          $temp3->firstname = 'Kevin';
          $temp3->lastname = 'Moore';
          $temp3->email = 'kevin@nlcd.com';
          $temp3->phone= '+18593278744';
          $temp3->save();


    }
}

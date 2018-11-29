<?php

use Illuminate\Database\Seeder;

class AlertsTableSeeder extends Seeder
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


      $temp = new \App\Alerts;
      $temp->user_id = $jacob->id;
      $temp->creator = $jacob->name;
      $temp->name = 'Hiking Trip';
      $temp->location = 'Red River Gorge, KY';
      $temp->description= 'A day long hiking trip in the gorge, starting near the lodge and ending in the same location.';
      $temp->start = 'Nov 29, 2018 1:00 PM';
      $temp->end = 'Nov 30 2018 2:00 PM';
      $temp->priority = 'low';
      $temp->save();

    }
}

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
      $temp->name = 'Hiking Trip';
      $temp->location = 'Red River Gorge, KY';
      $temp->description= 'A six hour hiking trip in the gorge, starting near the lodge and ending in the same location.';
      $temp->intime = '12:00';
      $temp->timeout = '6:00';
      $temp->priority = 'low';
      $temp->save();

    }
}

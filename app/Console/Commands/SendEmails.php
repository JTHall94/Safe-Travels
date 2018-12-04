<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends alert-based emails';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $carbon = new Carbon();

      //  $user = \App\User::where('id', '=', '1')->first();


        $alerts = \App\Alerts::where('created_at', '=', $carbon)->get();

        foreach ($alerts as $alert) {

          $user = \App\User::where('id', '=', $alert->user_id)->first();

        Mail::raw('This is a notification from the Safe Travels alert system. You have been tagged by '.$user->name.'in an alert called '.$alert->name.', with a priority level marked '.$alert->priority.'. The alert begins at '.$alert->start.', and is set to end at '.$alert->end.'. Additionally, the alert is located at '.$alert->location.'.
        Additional descriptive details are as follows: '.$alert->description.'. To view this alert in its entirety follow this link: '.route('alerts.show', $alert->id).'.' , function($message)
        {
          $message->to('jacobthall94@gmail.com');
        });
      }
    }
// $this->alerts = \App\Alerts::where('end', '=', $carbon)
}

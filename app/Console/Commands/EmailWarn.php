<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class EmailWarn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'warnemails:send';

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

        $user = \App\User::where('id', '=', '1')->first();


        $alerts = \App\Alerts::where('end', '<=', $carbon)->get();

        foreach ($alerts as $alert) {

        Mail::raw('This is a notification from the Safe Travels alert system. The alert you were tagged in by '.$user->name.', called '.$alert->name.', with a priority level marked '.$alert->priority.', has reached its end-time without being resolved. The alert began at '.$alert->start.', and was set to end at '.$alert->end.'. Additionally, the alert is located at '.$alert->location.' If you cannot get into contact with '.$user->name.', consider taking action to ensure their safety.
        Additional descriptive details are as follows: '.$alert->description.'. To view this alert in its entirety follow this link: '.route('alerts.show', $alert->id).'.' , function($message)
        {
          $message->to('jacobthall94@gmail.com');
        });
      }
    }
// $this->alerts = \App\Alerts::where('end', '=', $carbon)
}

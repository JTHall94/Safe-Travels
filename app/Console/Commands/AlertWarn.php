<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Carbon\Carbon;
use Twilio\Rest\Client;

class AlertWarn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'warnalerts:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an alert to tagged contacts.';

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

        $tests = \App\Alerts::all();

        foreach ($tests as $test) {

          //$dt = Carbon::parse($test->end);

          //dd($hour);





        $this->alerts = \App\Alerts::where('end', '<=', $carbon)->get();





        $twilioConfig = config('services.twilio');
        $accountSid = $twilioConfig['twilio_account_sid'];
        $authToken = $twilioConfig['twilio_auth_token'];
        $this->sendingNumber = $twilioConfig['twilio_number'];

        $this->twilioClient = new Client($accountSid, $authToken);

      };

      //dd($this->alerts);



        $this->alerts->each(
            function ($alert) {



                $this->_remindAbout($alert);
            }
        );
      }

        private function _remindAbout($alert)
        {
       foreach ($alert->contacts as $contact) {
         //dd($alert);
        //$contact = \App\Contacts::where('id', '=', '1')->get();

        $name = $alert->user->name;
        $recipientName = $contact->firstname;
        $time = $alert->timeout;
        $phonenumber = "+18594571050";//$contact->phone;
        $message = "Hello $recipientName, the Safe Travels alert you were tagged in by $name, called $alert->name, with a priority of $alert->priority, has reached its end time without being resolved. The alert was set to start at $alert->start, expire at $alert->end. The location of the alert is $alert->location. If you cannot get into contact with the alert creator, take action to ensure their safety.";



        $this->_sendMessage($phonenumber, $message);
      }
    }

    private function _sendMessage($number, $content)
    {
        $this->twilioClient->messages->create(
            $number,
            array(
                "from" => "+18595442139",
                //
                //NOTE: Why won't this work?
                //$this->sendingNumber,
                "body" => $content
            )
        );
    }

    }

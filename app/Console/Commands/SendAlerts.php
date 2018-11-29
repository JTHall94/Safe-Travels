<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Carbon\Carbon;
use Twilio\Rest\Client;

class SendAlerts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alerts:send';

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





        $this->alerts = \App\Alerts::where('end', '<', $carbon)->get();





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

        $recipientName = $contact->firstname;
        $time = $alert->timeout;
        $phonenumber = $contact->phone;
        $message = "Hello $recipientName, this is a test of the alert system.";



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

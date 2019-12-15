<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index');
    }

    public function inbox()
    {
        return view('messages.inbox');
    }

    public function sent()
    {
        return view('messages.sent');
    }

    public function chat()
    {
        return view('messages.chat');
    }

    public function sms()
    {
        return view('messages.sms');
    }


    public function send_sms()
    {
        // $sms = $_POST['sms'];
        // $receiver = $_POST['number'];

        // Be sure to include the file you've just downloaded
        // require_once('../app/AfricasTalkingGateway.php');
        // // Specify your authentication credentials
        // /*$username = "Mat";
        // $apikey = "3eb659599cce14e1d8fe1303c9aeadccb2b38632262526f5d93c937487ce086a";*/
        // $username = "sandbox";
        // $apikey ="edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18";
        // // Specify the numbers that you want to send to in a comma-separated list
        // // Please ensure you include the country code (+254 for Kenya in this case)
        // $recipients = "+256783013570,+256784910695";
        // // And of course we want our recipients to know what we really do
        // $message    = "YOOOO!";
        // // Create a new instance of our awesome gateway class
        // $gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");
        // ************************************************************************************
        // NOTE: If connecting to the sandbox:
        // 1. Use "sandbox" as the username
        // 2. Use the apiKey generated from your sandbox application
        //    https://account.africastalking.com/apps/sandbox/settings/key
        // 3. Add the "sandbox" flag to the constructor
        // $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
        // *************************************************************************************
        // // Any gateway error will be captured by our custom Exception class below, 
        // // so wrap the call in a try-catch block
        // try { 
        // // Thats it, hit send and we'll take care of the rest. 
        // $results = $gateway->sendMessage($recipients, $message);
                  
        // foreach($results as $result) {
        //   // status is either "Success" or "error message"
        //   echo("<center>");
        //   echo " Number: " .$result->number;
        //   echo("<br>");
        //   echo " Status: " .$result->status;
        //   echo("<br>");
        //   echo " StatusCode: " .$result->statusCode;
        //   echo("<br>");
        //   echo " MessageId: " .$result->messageId;
        //   echo("<br>");
        //   echo " Cost: "   .$result->cost."\n";
        //   echo("<br>");
        //   echo("<br>");
        //   echo("</center>");
        // }
        // }
        // catch ( AfricasTalkingGatewayException $e ){
        // echo "Encountered an error while sending: ".$e->getMessage();
        // }
        // DONE!!!
        return view('messages.sms');
    }


    public function bulk_sms()
    {
        return view('messages.bulk_sms');
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

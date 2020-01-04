<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\User;
use App\Airtime;
use App\messages;
use App\Transactions;
use Auth;


class AirtimeController extends Controller
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
        return view('airtime.index');
    }


    public function self_at()
    {
        return view('airtime.self-at');
    }

    public function buy_self(Request $request)
    {
        //validate
        $this->validate($request,[
            'amount' => 'required',
            'phone' => 'required'
        ]);

        $amount = $request->input('amount');
        $receiver =$request->input('phone');
        $cost =$request->input('cost');
        $user = Auth::user()->name;
        $user_wallet = Auth::user()->wallet_id;
        $user_balance = Auth::user()->wallet_balance;
        $transaction_id = "#4a5t9"."_".time()."6_0hz";
        

        // $username = "Mat";
        // $apiKey = "4c2abe345bc83d4bcfb557a7bf75dc550e8138f77395f7f5611a032bcb5f6eda";
        
        $username = "sandbox";
        $apiKey ="edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18";
        
        // Specify the numbers that you want to send to in a comma-separated list
        // Please ensure you include the country code (+254 for Kenya in this case)
        // $recipients = "+256783013570,+256784910695";

        // // Create a new instance of our awesome gateway class
        $AT = new AfricasTalking($username, $apiKey);
        
        // Get one of the services
        $airtime = $AT->airtime();

        $currencyCode = "UGX" ;
        $phoneNumber = 1*$receiver;

        // Set the phone number, currency code and amount in the format below
        $recipients = [[
            "phoneNumber"  => "+256".$phoneNumber,
            "currencyCode" => "UGX",
            "amount"       => $amount
        ]];

        try {
            // That's it, hit send and we'll take care of the rest
            $results = $airtime->send(["recipients" => $recipients]);
            print_r($results);

            //persit
            $txt = new Airtime();
            $txt->sender = $user;
            $txt->amount = $amount;
            $txt->receiver = '0'.$phoneNumber;
            $txt->cost = $cost;
            $txt->save();

            //record
            $ts = new Transactions();
            $ts->transaction = $transaction_id;
            $ts->amount = $cost." "."ohz";
            $ts->wallet = $user_wallet;
            $ts->description = " Airtime ";
            $ts->save();

            //notify
            $not = new messages();
            $not->author = "Notification";
            $not->receiver = $user;
            $not->message = "You successfully redeemed ".$cost." "."ohz as sms";
            $not->save();

            //update wallet
            $updt = User::find($post_id)->all();
            $updt = $user_balance-$cost;
            $updt->save();
        } catch(Exception $e) {
            echo "Error: ".$e->getMessage();
        }

        return redirect('sent_airtime');
    }

    public function other_at()
    {
        return view('airtime.at-other');
    }

     public function others_at()
    {
        return view('airtime.at-others');
    }


    public function sent_airtime()
    {
        $user = Auth::user()->name;
        $ats = Airtime::where('sender', $user)->orderBy('id','desc')->get();
        return view('airtime.sent_at',["ats"=> $ats]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

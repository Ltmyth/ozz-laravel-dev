<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\messages;
use App\Sms;
use App\Transactions;
use AfricasTalking\SDK\AfricasTalking;

class WalletController extends Controller
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
        $balance = Auth::user()->wallet_balance;
        $id = Auth::user()->wallet_id;
        return view('wallet.index',["balance" => $balance, "id" => $id]);
    }

    public function transactions()
    {
        $ts = Transactions::where([["id", ">", 0],['transaction','!=', "null"]])->orderBy('id','desc')->get();
        return view('wallet.transactions')->with("ts", $ts);
    }

    public function withdraw_stash()
    {
        return view('wallet.withdraw');
    }

    public function withdraw(Request $request)
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
        $user_id = Auth::user()->id;
        $user_wallet = Auth::user()->wallet_id;
        $user_balance = Auth::user()->wallet_balance;
        $transaction_id = "#4m5m9"."W".time()."6D0hz";

        
        if ($user_balance>$cost && $cost>1) {
            
            $username = "Mat";
            $apiKey = "4c2abe345bc83d4bcfb557a7bf75dc550e8138f77395f7f5611a032bcb5f6eda";
            
            // $username = "sandbox";
            // $apiKey ="edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18";
            
            // Specify the numbers that you want to send to in a comma-separated list
            // Please ensure you include the country code (+254 for Kenya in this case)
            // $recipients = "+256783013570,+256784910695";
            $phoneNumber = 1*'0783013570';

            $message = '$user'.'has requested a'.$amount.'Ugx withdrawal to '.'0'.$phoneNumber.' with transaction id:'.$transaction_id;
            
            // // Create a new instance of our awesome gateway class
            $AT       = new AfricasTalking($username, $apiKey);
            // Get one of the services
            $sms = $AT->sms();

            // Use the service
            $result   = $sms->send([
                'to'      => '+256'.$phoneNumber,
                'message' => $message
            ]);

            print_r($result);
            //record
            $ts = new Transactions();
            $ts->transaction = $transaction_id;
            $ts->amount = $cost." "."ohz";
            $ts->wallet = $user_wallet;
            $ts->description = " Stash ";
            $ts->save();

            //update wallets
            $updt = User::find($user_id);
            $updt->wallet_balance = $user_balance-$cost;
            $updt->save();

            //notify
            $not = new messages();
            $not->author = "Notification";
            $not->receiver = $user;
            $not->message = "You successfully redeemed ".$cost." "."ohz as mobilemoney with transaction id:"." ".$transaction_id;
            $not->save();

            //persist
            $txt = new Sms();
            $txt->author = "theohz";
            $txt->receiver = "Latim Mark";
            $txt->phone = '0'.$phoneNumber;
            $cost = 0.01;
            $txt->cost = $cost;
            $txt->message = $message;
            $txt->save();


            //record
            $ts1 = new Transactions();
            $ts1->transaction = $transaction_id;
            $ts1->amount = $cost." "."ohz";
            $ts1->wallet = $user_wallet;
            $ts1->description = " Sms ";
            $ts1->save();

            //notify
            $not1 = new messages();
            $not1->author = "Notification";
            $not1->receiver = $user;
            $not1->message = "You successfully redeemed ".$cost." "."ohz as sms with transaction id:"." ".$transaction_id;
            $not1->save();

            $message ='Processed';         

            return redirect('/notification')->with('message', $message);
        }
        elseif($user_balance<$cost && $cost>1) {
            $error_message = "Your ohz balance is too low";
            return redirect('/withdraw_stash')->with('error_message', $error_message);
        }
        elseif($user_balance>$cost && $cost<1) {
            $error_message = "Request is below minimum limit";
            return redirect('/withdraw_stash')->with('error_message', $error_message);
        }
    }

    public function share_stash()
    {
        return view('wallet.share');
    }

    public function send_stash(Request $request)
    {
        //validate
        $this->validate($request,[
            'user' => 'required',
            'amount' => 'required'
        ]);


        $amount = $request->input('amount');
        $receiver =$request->input('user');
        $cost =$request->input('cost');

        $user = Auth::user()->name;
        $user_id = Auth::user()->id;
        $user_wallet = Auth::user()->wallet_id;
        $user_balance = Auth::user()->wallet_balance;
        $transaction_id = "#4s5t9"."S".time()."6H0hz";

        $check = User::where('name', $receiver)->first();

        if($user == 'Theohz'){
            if ($check != "") {
                //record
                $ts = new Transactions();
                $ts->transaction = $transaction_id;
                $ts->amount = $cost." "."ohz";
                $ts->wallet = "#".$receiver;
                $ts->description = " Stash ";
                $ts->save();

                //update wallets
                $updt = User::find($user_id);
                $updt->wallet_balance = $user_balance+$cost;
                $updt->save();

                $updt1 = User::find($check->id);
                $updt1->wallet_balance = $user_balance+$cost;
                $updt1->save();

                //notify
                $not = new messages();
                $not->author = "Notification";
                $not->receiver = $user;
                $not->message = "You have successfully topped up ".$cost." "."ohz to ".$receiver." with transaction id:"." ".$transaction_id;
                $not->save();

                $not1 = new messages();
                $not1->author = "Notification";
                $not1->receiver = $receiver;
                $not1->message = "You have successfully topped up ".$cost." "."ohz with transaction id:"." ".$transaction_id;
                $not1->save();

                $message ='Topped up';         

                return redirect('/notification')->with('message', $message);
            }
            elseif($check == "") {
                $error_message = $receiver." is not yet on theohz";
                return redirect('/share_stash')->with('error_message', $error_message);
            }
        }elseif ($user != 'Theohz') {
            if ($check != "" && $user_balance>$cost) {
                //record
                $ts = new Transactions();
                $ts->transaction = $transaction_id;
                $ts->amount = $cost." "."ohz";
                $ts->wallet = $user_wallet;
                $ts->description = " Stash ";
                $ts->save();

                //update wallets
                $updt = User::find($user_id);
                $updt->wallet_balance = $user_balance-$cost;
                $updt->save();

                $updt1 = User::find($check->id);
                $updt1->wallet_balance = $user_balance+$cost;
                $updt1->save();

                //notify
                $not = new messages();
                $not->author = "Notification";
                $not->receiver = $user;
                $not->message = "You successfully sent ".$cost." "."ohz to ".$receiver." with transaction id:"." ".$transaction_id;
                $not->save();

                $not1 = new messages();
                $not1->author = "Notification";
                $not1->receiver = $receiver;
                $not1->message = "You received ".$cost." "."ohz from ".$user." with transaction id:"." ".$transaction_id;
                $not1->save();

                $message ='Processed';         

                return redirect('/notification')->with('message', $message);
            }
            elseif($check == "") {
                $error_message = $receiver." is not yet on theohz";
                return redirect('/share_stash')->with('error_message', $error_message);
            }
            elseif($check != "" && $user_balance<$cost) {
                $error_message = "Your ohz balance is too low";
                return redirect('/share_stash')->with('error_message', $error_message);
            }
        }      
       
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

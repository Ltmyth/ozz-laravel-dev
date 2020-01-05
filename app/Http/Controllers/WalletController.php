<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\messages;
use App\Transactions;

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
        $not->message = "You successfully redeemed ".$cost." "."ohz as mobilemoney with transaction id:"." ".$transaction_id;
        $not->save();

        //update wallet
        $updt = User::find($user_id);
        $updt->wallet_balance = $user_balance-$cost;
        $updt->save();
        return redirect('/notification');
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
        
        if ($check != "" && $user_balance>$cost) {
            //record
            $ts = new Transactions();
            $ts->transaction = $transaction_id;
            $ts->amount = $cost." "."ohz";
            $ts->wallet = $user_wallet;
            $ts->description = " Airtime ";
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
            $not1->receiver = $user;
            $not1->message = "You received ".$cost." "."ohz from ".$user." with transaction id:"." ".$transaction_id;
            $not1->save();

            $message ='Processed';         

            return redirect('/notification')->with('message', $message);
        }
        elseif($check == "") {
            $error_message = "User not yet on theohz";
            return redirect('/share_stash')->with('error_message', $error_message);
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

<?php
namespace App\Http\Controllers;
use App\User;
use App\messages;
use App\Transactions;
use App\Sms;
use Auth;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

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
    public function index($inbox)
    {
        $user = $inbox;
        $profile = Auth::user()->name;
        $texts = messages::where([['receiver','=', $inbox],['receiver','!=', 'everyone'], ['author','!=', '$profile'] ,['author','!=', 'Notification']])->orderBy('id','desc')->get();
        // if($texts = "null"){
        //     $text = new messages();
        //     $text->author = "the</b><b class='orange'>oh</b><b>z</b> <b class='black'>chatbot</b>";
        //     $text->receiver = "everyone";
        //     $text->message = "Hello, welcome to theohz platform";
        //     $text->save();
        // }
        $uniq_texts = $texts->unique('author');
        $text_count = $uniq_texts->count();
        return view('messages.index' , ['uniq_texts' => $uniq_texts, 'texts' => $texts, 'text_count' => $text_count]);
    }
    
    public function send_message(Request $request)
    {
        //validate
        $this->validate($request,[
            'message' => 'required',
            'author' => 'required',
            'receiver' => 'required'
        ]);
        $author = $request->input('author');
        $receiver = $request->input('receiver');
        $user = Auth::user()->name ;

        if ($receiver != $user) {
            //new message
            $text = new messages();
            $text->author = $author;
            $text->receiver = $receiver;
            $text->message = $request->input('message');
            $user_profile = User::where('name', $receiver)->first();


            //
            if( $user_profile != null ){
                if($request->hasFile('upload')){
                    //filename with ext
                    $uploadfile = $request->file('upload')->getClientOriginalName();
                    //jhus filename
                    $uploadname = pathinfo($uploadfile,PATHINFO_FILENAME);  
                    //jhus ext
                    $extension = $request->file('upload')->getClientOriginalExtension(); 
                    //unique storage name
                    $upload_storage_name = $uploadname."_".time().".".$extension; 
                    //store file in public/uploads/
                    $path = $request->file('upload')->storeAs('storage/app/public/',$upload_storage_name);
                    $text->upload = $upload_storage_name;
                }
                
                $text->save();
                $message ='Message delivered';
                return redirect('/inbox/'.$receiver)->with('message', $message);
        }elseif ($receiver=$user) {
             $error_message ='Not allowed';
            return redirect('/messages/'.$author)->with('error_message', $error_message);
        }
        
        }else{
            $error_message =$receiver." ".'is not yet on theohz';
            return redirect('/messages/'.$author)->with('error_message', $error_message);
        } 
        
    }


    public function inbox($name)
    {
        $user_profile = User::where('name', $name)->first();
        return view('messages.inbox')->with('profile', $user_profile);
    }


    public static function individual_chat($user)
    {
        $receiver = Auth::user()->name;

        $chats = messages::where([['receiver','=',$receiver],['author', '=', $user]])->orWhere([['receiver','=',$user],['author', '=', $receiver]])->orderBy('id','desc')->get();

        
        // $received_texts = messages::where([['receiver','=',$receiver],['author', '=', $user]] )->orWhere('receiver', 'everyone')->orderBy('id','desc')->get();

        // $sent_texts = messages::where([['receiver','=',$user],['author', '=', $receiver]])->orderBy('id','desc')->get();

        // return view('messages.individual_chat', ["received_texts" => $received_texts, "sent_texts" => $sent_texts]);

        return view('messages.individual_chat',['chats' => $chats, 'user' => $receiver]);
    }




    public function chat()
    {
        $user = Auth::id();
        $onlines = User::where([['status', '=','online'], ['name', '!=', 'Theohz'],['id', '!=', $user]])->get();
        $chat_count = $onlines->count();
        // $onlines = "";
        return view('messages.chat' , ["onlines" => $onlines, "chat" => $chat_count]);
    }


    public function sms()
    {
        return view('messages.sms');
    }


    public function send_sms(Request $request)
    {
        //validate
        $this->validate($request,[
            'sms' => 'required',
            'receiver' => 'required',
            'number' => 'required'
        ]);

        $cost = 50;
        $message = $request->input('sms');
        $receiver =$request->input('number');
        $user = Auth::user()->name;
        $user_id = Auth::user()->id;
        $user_wallet = Auth::user()->wallet_id;
        $user_balance = Auth::user()->wallet_balance;
        $name = $request->input('receiver');
        $transaction_id = "#4s5m9"."L".time()."s6M0hz";

        // $username = "Mat";
        // $apiKey = "4c2abe345bc83d4bcfb557a7bf75dc550e8138f77395f7f5611a032bcb5f6eda";
        
        $username = "sandbox";
        $apiKey ="edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18";
        
        // Specify the numbers that you want to send to in a comma-separated list
        // Please ensure you include the country code (+254 for Kenya in this case)
        // $recipients = "+256783013570,+256784910695";

        if ($receiver != "0" && $user_balance>$cost){
            $phoneNumber = 1*$receiver;


            
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

            //persist
            // $txt = new Sms();
            // $txt->author = $user;
            // $txt->receiver = $name;
            // $txt->phone = '0'.$phoneNumber;
            // $cost = 50;
            // $txt->cost = $cost;
            // $txt->message = $message;
            // $txt->save();


            //record
            // $ts = new Transactions();
            // $ts->transaction = $transaction_id;
            // $ts->amount = $cost." "."ohz";
            // $ts->wallet = $user_wallet;
            // $ts->description = " Sms ";
            // $ts->save();

            //notify
            // $not = new messages();
            // $not->author = "Notification";
            // $not->receiver = $user;
            // $not->message = "You successfully redeemed ".$cost." "."ohz as sms with transaction id:"." ".$transaction_id;
            // $not->save();

            //update wallet
            // $updt = User::find($user_id);
            // $updt->wallet_balance = $user_balance-$cost;
            // $updt->save();
            // DONE!!!
            return redirect('/sent');
        }else{
            $error_message = "Your ohz balance is too low";
            return redirect('sms')->with('error_message', $error_message);
        }
        
    }


    public function bulk_sms()
    {
        return view('messages.bulk_sms');
    }

    

    public function send_bulk_sms(Request $request)
    {
        //validate
        $this->validate($request,[
            'message' => 'required',
            'csv_upload' => 'required'
        ]);

        if($request->hasFile('csv_upload')){
            $message = $request->input('sms');
            $receiverz =$request->file('csv_upload');
            $user = Auth::user()->name;
            $user_id = Auth::user()->id;
            $user_wallet = Auth::user()->wallet_id;
            $user_balance = Auth::user()->wallet_balance;
            $name = $request->input('receiver');
            $transaction_id = "#4s5m9"."L".time()."s6M0hz";

            // $username = "Mat";
            // $apiKey = "4c2abe345bc83d4bcfb557a7bf75dc550e8138f77395f7f5611a032bcb5f6eda";
            
            $username = "sandbox";
            $apiKey ="edc34ce3dbdc8c2d8aa8d2da5725079a702de848c2900ef154e307b75bca4e18";
            

            $customerArr = array(); 

            $handle = fopen($receiverz, "r");
            if ($handle) {
                $file_data = array_map('str_getcsv', file($receiverz));
                $file_length = count($file_data);
                $receivers = array();                
                if($file_length>=2) {
                    foreach($file_data as $line) {
                        $nums = array_diff($line, [""]);
                        $receivers[] = $nums;
                    }
                }
                print_r($receivers);
            } else {
                die("Unable to open file");
            }
            //persist
            // $txt = new Sms();
            // $txt->author = $user;
            // $txt->receiver = $name;
            // $txt->phone = '0'.$phoneNumber;
            // $cost = 0.01;
            // $txt->cost = $cost;
            // $txt->message = $message;
            // $txt->save();


            //record
            // $ts = new Transactions();
            // $ts->transaction = $transaction_id;
            // $ts->amount = $cost." "."ohz";
            // $ts->wallet = $user_wallet;
            // $ts->description = " Sms ";
            // $ts->save();

            //notify
            // $not = new messages();
            // $not->author = "Notification";
            // $not->receiver = $user;
            // $not->message = "You successfully redeemed ".$cost." "."ohz as sms with transaction id:"." ".$transaction_id;
            // $not->save();

            //update wallet
            // $updt = User::find($user_id);
            // $updt->wallet_balance = $user_balance-$cost;
            // $updt->save();

            // DONE!!!
            $message ="Sent";
            return redirect('/sent')->with('message', $message);
        }else{
            $error_message ="Upload csv in correct sample format";
            // Failed !!
            return redirect('/bulk_sms')->with('error_message', $error_message);
        }        
    }

    public function sent()
    {
        $user = Auth::user()->name;
        $txts = Sms::where('author', $user)->orderBy('id','desc')->get();
        return view('messages.sent',["texts"=> $txts]);
    }

    public function notification_message()
    {
        $receiver = Auth::user()->name;
        $nots = messages::where([['receiver','=',$receiver],['author', '=', 'Notification']])->orderBy('id','desc')->get();
        return view('messages.notification')->with("nots", $nots);
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
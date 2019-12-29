<?php
namespace App\Http\Controllers;
use App\User;
use App\messages;
use Auth;
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
    public function index($inbox)
    {
        $user = $inbox;
        $texts = messages::where('receiver', $user)->orWhere('receiver', 'everyone')->orderBy('id','desc')->get();
        // if($texts = "null"){
        //     $text = new messages();
        //     $text->author = "the</b><b class='orange'>oh</b><b>z</b> <b class='black'>chatbot</b>";
        //     $text->receiver = "everyone";
        //     $text->message = "Hello, welcome to theohz platform";
        //     $text->save();
        // }
        $uniq_texts = $texts->unique('author');
        $text_count = $uniq_texts->count();
        return view('messages.index' , ["uniq_texts" => $uniq_texts, "texts" => $texts, "text_count" => $text_count]);
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
        //new message
        $text = new messages();
        $text->author = $author;
        $text->receiver = $receiver;
        $text->message = $request->input('message');
        $user_profile = User::where('name', $receiver)->first();
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

        $received_texts = messages::where([['receiver','=',$receiver],['author', '=', $user]] )->orWhere('receiver', 'everyone')->orderBy('id','desc')->get();

        $sent_texts = messages::where([['receiver','=',$user],['author', '=', $receiver]])->orderBy('id','desc')->get();

        return view('messages.individual_chat', ["received_texts" => $received_texts, "sent_texts" => $sent_texts]);
    }


    public function sent()
    {
        return view('messages.sent');
    }


    public function chat()
    {
        $user = Auth::id();
        $onlines = User::where([['status', '=','online'],['id', '!=', $user]])->get();
        $chat_count = $onlines->count();
        // $onlines = "";
        return view('messages.chat' , ["onlines" => $onlines, "chat" => $chat_count]);
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


    public function notification_message()
    {
        return view('messages.notification');
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
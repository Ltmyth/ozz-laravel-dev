<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class People extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show_user($name)
    {
        //
        $user_profile = User::where('name', $name)->first();
        return view('people.user-profiles')->with('profile', $user_profile);
    }

    public function cl_profile()
    {
        //
        return view('people.cleaner-profile');
    }

    public function update_profile(Request $request)
    {
        //input   
        $bio = $request->input('bio');
        $phone =$request->input('number');
        $dob = $request->input('bd');
        $community = $request->input('community');
        $old_pwd = $request->input('current');
        $old_pwd_hash = bcrypt($old_pwd);
        $new_pwd = $request->input('pwd');
        //records
        $user = Auth::user()->name;
        $user_id = Auth::user()->id;
        $user_bio = Auth::user()->bio;
        $user_bd = Auth::user()->dob;
        $user_community = Auth::user()->community;
        $user_phone = Auth::user()->phone;
        $user_pwd = Auth::user()->password;

        //update
        $updt = User::find($user_id);
        if ($bio == "") {
            $updt->bio = $user_bio;
        }elseif ($bio != "") {
            $updt->bio = $bio;
        }

        if ($phone == "") {
            $updt->phone = $user_phone;
        }elseif ($phone != "") {
            $phonenumber = 1*phone;
            $updt->phone = "0".$phonenumber;
        }

        // if ($dob == "") {
        //     $updt->dob = $user_bd;
        // }elseif ($dob != "") {
        //     $updt->dob = $dob;
        // }

        if ($community == "") {
            $updt->community = $user_community;
        }elseif ($community != "") {
            $updt->community = $community;
        }

        if ($old_pwd == "") {
            $updt->password = $user_pwd;
        }elseif ($pwd != "") {
            if ($old_pwd_hash = $user_pwd) {
                $updt->password = $new_pwd;   
            }elseif ($old_pwd_hash != $user_pwd) {
                $error_message = "Wrong password entered";
                return redirect('/profile')->with('error_message', $error_message);
            }
        }
        $updt->save();
    }


    public function show($id)
    {  
        $user = User::find($id);
        return view('posts.showpost')->with('post',$post);
    }
    

    public function edit($id)
    {
        //
    }
    

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
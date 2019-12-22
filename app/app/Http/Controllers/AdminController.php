<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Hostel;

class AdminController extends Controller
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
        return view('admin.index');
    }
    

    public function accoms_add()
    {
        return view('admin.accoms_add');
    }

    public function add(Request $accom)
    {
        //validate
        $this->validate($accom,[
            'accoms' => 'required'
        ]);

        $x = $accom->input('accoms');

        if ($x  == 'hostel') {
            return redirect('add_h');
        }elseif ($x == 'appartment') {
            return redirect('add_a');
        }
        
    }
    
    public function add_h(Request $hostel)
    {
        $this->validate($hostel,[
            'hname' => 'required',
            'upload' => '|image|nullable|max:1999',
            'custodian' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'price' => 'required',
            'location' => 'required'
        ]);

        if (Hostel::where('name', '=', $hostel->input('hname'))->exists()) {
            $warning ='Hostel already exists!';
            return redirect('/add_h/')->with('warning', $warning);    
        }elseif(Hostel::where('phone', '=', $hostel->input('phone'))->exists()){
            $warning ='Phone number already in use !';
            return redirect('/add_h/')->with('warning', $warning);
        }
        else{
            $hosta = new Hostel();

            if($hostel->hasFile('upload')){
                //filename with ext
                $uploadfile = $hostel->file('upload')->getClientOriginalName();
                //jhus filename
                $uploadname = pathinfo($uploadfile,PATHINFO_FILENAME);  
                //jhus ext
                $extension = $hostel->file('upload')->getClientOriginalExtension(); 
                //unique storage name
                $upload_storage_name = $uploadname."_".time().".".$extension; 

                //store file in public/uploads/
                $path = $hostel->file('upload')->storeAs('public/uploads/hostel-pics/',$upload_storage_name);

                $hosta->photo = $upload_storage_name;
            }

            $hosta->name = $hostel->input('hname');
            $hosta->price = $hostel->input('price');
            $hosta->custodian = $hostel->input('custodian');
            $hosta->location = $hostel->input('location'); 
            $hosta->category= $hostel->input('category');      
            $hosta->phone= $hostel->input('phone');       
            $hosta->save();
            $message ='Hostel added';

            return redirect('/hostels_admin_view/')->with('message', $message);
        }      
    }

    public function add_a()
    {
        return view('admin.appartments');
    }


    public function at()
    {
        return view('admin.at');
    }

    public function add_food()
    {
        return view('admin.food');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

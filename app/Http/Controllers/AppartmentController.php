<?php

namespace App\Http\Controllers;

use App\Appartment;
use Illuminate\Http\Request;

class AppartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.appartments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_a(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'upload' => '|image|nullable|max:1999',
            'custodian' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'price' => 'required',
            'location' => 'required'
        ]);

        if (Appartment::where('name', '=', $request->input('name'))->exists()) {

            $warning ='Appartment already exists!';
            return redirect('/add_a/')->with('warning', $warning);    

        }elseif(Appartment::where('phone', '=', $request->input('phone'))->exists()){

            $warning ='Phone number already in use !';
            return redirect('/add_a/')->with('warning', $warning);

        }
        else{
            
            $appartment = new Appartment();

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
                $path = $request->file('upload')->storeAs('public/uploads/Appartment-pics/',$upload_storage_name);

                $appartment->photo = $upload_storage_name;
            }

            $appartment->name = $request->input('name');
            $appartment->price = $request->input('price');
            $appartment->custodian = $request->input('custodian');
            $appartment->location = $request->input('location'); 
            $appartment->category= $request->input('category');      
            $appartment->phone= $request->input('phone');       
            $appartment->save();
            $message ='Appartment added';

            return redirect('/appts_admin_view/')->with('message', $message);
        }      
    }

    public function admin_view(){
        $requestz = Appartment::orderBy('id','asc')->get();
        return view('accommodation.appts-admin-view')->with('appartments',$requestz);
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
     * @param  \App\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function show(Appartment $appartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartment $appartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appartment $appartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appartment  $appartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartment $appartment)
    {
        //
    }
}

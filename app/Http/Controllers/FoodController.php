<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
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
        return view('food.index');
    }


    public function provider()
    {
        return view('food.provider');
    }

    public function admin_view()
    {
        $providaz = Food::orderBy('id','asc')->get();
        return view('food.admin-view')->with('fd_providers',$providaz);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_f_provider(Request $provider)
    {
        $this->validate($provider,[
            'fp_name' => 'required',
            'upload' => '|image|nullable|max:1999',
            'manager' => 'required',
            'phone' => 'required',
            'price' => 'required',
            'location' => 'required'
        ]);

        if (Food::where('name', '=', $provider->input('fp_name'))->exists()) {
            $warning ='Food provider already exists!';
            return redirect('/add_food/')->with('warning', $warning);    
        }elseif(Food::where('phone', '=', $provider->input('phone'))->exists()){
            $warning ='Phone number already in use !';
            return redirect('/add_food/')->with('warning', $warning);
        }
        else{
            $food = new Food();

            if($provider->hasFile('upload')){
                //filename with ext
                $uploadfile = $provider->file('upload')->getClientOriginalName();
                //jhus filename
                $uploadname = pathinfo($uploadfile,PATHINFO_FILENAME);  
                //jhus ext
                $extension = $provider->file('upload')->getClientOriginalExtension(); 
                //unique storage name
                $upload_storage_name = $uploadname."_".time().".".$extension; 

                //store file in public/uploads/
                $path = $provider->file('upload')->storeAs('public/uploads/foodprovider-pics/',$upload_storage_name);

                $food->photo = $upload_storage_name;
            }

            $food->name = $provider->input('fp_name');
            $food->price = $provider->input('price');
            $food->manager = $provider->input('manager');
            $food->location = $provider->input('location');     
            $food->phone= $provider->input('phone');       
            $food->save();
            $message ='Food provider added';

            return redirect('/food_admin')->with('message', $message);
        }      
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;

class FarmerController extends Controller
{
    public function index(){
        $url = url('/visit');
        $title ="Farmer Registation";
        $data = compact('url','title');
        return view('register')->with($data);
       }


     public function store(Request $request){
        $farmer = new Farmer;

        // Assign values to the model
        $farmer->name = $request->input('name');
        $farmer->email = $request->input('email');
        $farmer->password = md5($request->input('password'));
        $farmer->address = $request->input('address');
        $farmer->city = $request->input('city');
        $farmer->state = $request->input('state');
        // $farmer->gender = $request->input('gender');
        // $college ->gender = $request['gender'];

        $farmer->dob = $request->input('dob');

        // Save the data to the database
        $farmer->save();
        return redirect('/visit/view');

        // Redirect or return a response as needed
    }
    public function view(){

        $farmer = Farmer::all();
        $data=compact('farmer');
       return view('view-farmer')->with($data);
       }


       public function delete($id){
        $farmer= Farmer::find($id);
        if(!is_null($farmer)){
            $farmer->delete();
        }
        return redirect('/visit/view');

       

    //    Farmer::find($id)->delete();
    //     return redirect()->back();
       }


       public function edit($id){
        $title ="Farmer Updation";

        $farmer = Farmer::find($id);

        if(is_null($farmer)){
        return redirect('/visit/view');

        }else{
            $url = url('/visit/update')."/".$id;
            $data =compact('farmer','url','title');
            return view('register')->with($data);
        }


       }

       public function update($id, Request $request){
        $farmer = Farmer::find($id);
        $farmer->name = $request['name'];
        $farmer->email = $request['email'];
        $farmer->city = $request['city'];
        $farmer->address = $request['address'];
        $farmer->state = $request['state'];
        $farmer->dob= $request['dob'];

    
        $farmer->save();

        return redirect('/visit/view');

       }
}

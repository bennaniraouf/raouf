<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use Hash;
class registrationController extends Controller
{
    public function add(Request $request)
    { 
      $data= new registration;
        $data->familyname=$request->familyname;
        $data->lastname=$request->lastname;
        $data->adress=$request->adress;
        $data->age=$request->age;
        $data->phonenumber=$request->phonenumber;
        $data->gender=$request->gender;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->bloodtype=$request->bloodtype;
        $data->Rh=$request->Rh;
        $data->disease=$request->disease;
        $data->save();
        return redirect('registration')->with('success','data saved');
    
    }
}

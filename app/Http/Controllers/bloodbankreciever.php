<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reciever;

class bloodbankreciever extends Controller
{
    public function addpost(Request $request)
    { 
        $data= new reciever;
        $data->O+=$request->input('name');
        $data->O-=$request->email;
        $data->A+=$request->phone;
        $data->A-=$request->bloodselect;
        $data->B+=$request->message;
        $data->B-=$request->message;
        $data->AB+=$request->message;
        $data->AB-=$request->message;
        $data->save();
        return redirect('bloodbank')->with('success','data saved');
    
    }
}

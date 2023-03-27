<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appeal;

class appealsController extends Controller
{ 
    public function addreq(Request $request)
    { 
        $data= new appeal;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->blood=$request->bloodselect;
        $data->msg=$request->message;
        $data->save();
    
    }
   }

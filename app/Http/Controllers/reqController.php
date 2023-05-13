<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demande;
use DB;

class reqController extends Controller
{
    public function addreq(Request $request){
        $data= new demande;
        $data->name=$request->name1;
        $data->email=$request->email1;
        $data->phone=$request->phone1;
        $data->blood1=$request->input1;
        $data->blood2=$request->input2;
        $data->blood3=$request->input3;
        
        $data->save();
        return redirect('request');
}

public function showrequests(){
    $demandes=DB::select('select * from demandes');
    return view('request',['demandes'=>$demandes]);
}


}
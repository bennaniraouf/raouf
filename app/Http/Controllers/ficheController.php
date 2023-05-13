<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fiche ;

class ficheController extends Controller
{
    public function addtofiche(Request $request)
    { 
      $data= new fiche;
      $data->maritalstatus=$request->maritalstatus;  
      $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->adress=$request->adress;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->tension=$request->tension;
        $data->temperature=$request->temperature;
        $data->height=$request->height;
        $data->weight=$request->weight;
        $data->blood=$request->blood;
        $data->gender=$request->gender;
        $data->volume=$request->volume;
        $data->volumemax=$request->volumemax;
        $data->date=$request->date;
        $data->others=$request->others;
        $data->save();
        
        return redirect('fiche')->with('success','data saved');
    
    }
}


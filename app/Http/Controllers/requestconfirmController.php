<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demande;
use DB;


class requestconfirmController extends Controller
{
    public function afficherdemande(){
        $need=DB::select('select * from demandes');
        return view('admin.recieversrequests',['need'=>$need]);
    }
    
    
}

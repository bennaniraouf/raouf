<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appeal;
use DB;

class pubController extends Controller
{
    public function show(){
        $pub=appeal :: all();
        return view('index',['pubs'=>$pub]);
    }

}

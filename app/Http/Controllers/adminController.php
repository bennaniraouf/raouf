<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

use App\Models\Admin ;
use App\Models\registrations ;
use DB;

use Illuminate\Support\Facades\Hash ;


class adminController extends Controller
{
    //
    function adminLogin(Request $req) {
        $admin = Admin::where(['email'=>$req->email])->first() ; 
         
         if(!$admin){
             return ('wrong passsword or email');
         }
         else {
            $req->session()->put('admin',$admin) ; 
             return redirect('admin_page'); 
         }
    }
    public function showdonors(){
        $volonteers=DB::select('select * from registrations');
        return view('admin.admin',['volonteers'=>$volonteers]);
    }

    
}

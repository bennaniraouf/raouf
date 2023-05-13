<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Hash;
use Session;


use Illuminate\Http\Request;

class profileController extends Controller
{
    public function addreciever(Request $request)
    { 
        $data= new profile;
        $data->companyname=$request->companyname;
        $data->firstname=$request->firstname;
        $data->lastname=$request->lastname;
        $data->password=Hash::make($request->password);
        $data->email=$request->email;
        $data->phone=$request->phonenumber;
        $data->photo=1;
        
        $data->save();
        return redirect('registration_recievers')->with('success','data saved');
    
    }

    public function loginReciever(Request $request){
$user = profile::where('email','=',$request->email)->first();

if($user){
if(Hash::check($request->password,$user->password)){
$request->Session()->put('loginId',$user->id);
return redirect('recieverpage'); 

}else{
    return back()->with('fail','this email is not matched with the password');
}

}else{
    return back()->with('fail','this email is not registred');
}

    }

public function recieverpage(){
    $data = array();
    if(session::has('loginId')){
        $data = profile::where('id','=',Session::get('loginId'))->first();
    }

    return view('reciever',compact('data'));
}

public function logout(){
if(session::has('loginId')){session::pull('loginId');
    return redirect('reciever_login');
}
}
}
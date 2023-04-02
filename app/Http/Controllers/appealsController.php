<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appeal;
use DB;

class appealsController extends Controller
{ 
    public function addpost(Request $request)
    { 
        $data= new appeal;
        $data->name=$request->input('name');
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->blood=$request->bloodselect;
        $data->msg=$request->message;
        $data->save();
        return redirect('appeal')->with('success','data saved');
    
    }

    public function viewform(){
        return view('appeal');
    }

    public function index(){
        $appeals=DB::select('select * from appeals');
        return view('appeal',['appeals'=>$appeals]);
    }
    //try
    public function editfunction($id){
        $appeals=DB::select('select * from appeals where id=?',[$id]);
        return view('appealedit',['appeals'=>$appeals]);
    }   

    public function updatefunc(Request $request,$id)
    {
        $appeals_name=$request->name;
        $appeals_email=$request->email;
        $appeals_phone=$request->phone;
        $appeals_blood=$request->blood;
        $appeals_message=$request->msg;
DB::update('update appeals set name=?,email=?,phone=?,blood=?,msg=? where id=?',[$appeals_name,$appeals_email,$appeals_phone,$appeals_blood,$appeals_message,$id]);
 return redirect('appeal')->with('success','data saved');
 }


 public function deletefunction($id){
    DB::delete('delete from appeals where id=?',[$id]);
    return redirect('appeal')->with('success','data deleted');
}   

   }

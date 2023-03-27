<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Hash ; 
class UserController extends Controller
{
    //
    function loginPage(Request $req) {
        $user = User::where(['email'=>$req->email])->first() ;
        if(!$user || !Hash::check($req->password,$user->password)) {
            return('wrong usernmae or password');
        }
        else {
            $req->session()->put('user',$user) ; 
            return redirect('/'); 
        }
}
function logto(request $req){
    $req->validate([
        'name'=>'required'
        
    ]);

$member = new User;
$member->name=$req->name;
$member->lastname=$req->lname;
$member->birth=$req->birth;
$member->gender=$req->gender;
$member->email=$req->email;
$member->phone=$req->phone;
$member->groupp=$req->group;
$member->pw=$req->pw;
$member->cpw=$req->cpw;

$member->save();
}
}
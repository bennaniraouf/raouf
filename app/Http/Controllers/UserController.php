<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\registration ;
use Illuminate\Support\Facades\Hash ; 
class UserController extends Controller
{
    //
    function loginPage(Request $req) {
        $user = registration::where(['email'=>$req->email])->first() ;
        if(!$user || !Hash::check($req->password,$user->password)) {
            return('wrong usernmae or password');
        }
        else {
            $req->session()->put('user',$user) ; 
            return redirect('/userSpace'); 
        }
}
function logto(request $req){
    $req->validate([
        'name'=>'required'
        
    ]);

$member = new registration;
$member->familyname=$req->familyname;
$member->lastname=$req->lastname;
$member->adress=$req->address;
$member->age=$req->age;
$member->phonenumber=$req->phonenumber;
$member->gender=$req->gender;
$member->email=$req->email;
$member->password=$req->passsword;
$member->bloodtype=$req->bloodtype;
$member->Rh=$req->Rh;
$member->disease=$req->disease;

$member->save();
}
}
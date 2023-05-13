<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\donor;

class appointementController extends Controller
{
    public function sendAppointement(Request $req,$id)
    {
        $donor = Donor::find($id) ; 
        $validatedData = $req->validate([
            'phone' => 'required|string|max:255',
            'center' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]); 
        
        $appointment = new Appointement;
        $appointment->first_name = $req->first_name;
        $appointment->last_name = $req->last_name;
        $appointment->email = $req->email; 
        $appointment->phone = $validatedData['phone'];
        $appointment->center = $validatedData['center'];
        $appointment->appointment_date = $validatedData['appointment_date'];
        $appointment->save();

        return view('/donor_space',compact('donor')); 
}
public function makeAppointement(){
$donor=donor::find($id);
return view('appointement', compact('donor'));

}
}

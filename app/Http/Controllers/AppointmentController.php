<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // TO FETCH ALL THE DATA OF APPOINTMENT
    public function index(){
        $appointments = Appointment::all();
        return view('admin.pages.admin-appointment' , compact('appointments'));
    }


  public function store(Request $request)
{
    $request->validate([
        'fullname'         => 'required|string|max:255',
        'email'            => 'required|email|max:255',
        'phone'            => 'required|string|max:20',
        'choosedoctor'     => 'required|string|max:255',
        'selectdepartment' => 'required|string|max:255',
        'appointmentdate'  => 'required',
        'message'          => 'nullable|string|max:5000',
    ]);

    // Convert dd-mm-yyyy → yyyy-mm-dd
    $appointmentdate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->appointmentdate)
                        ->format('Y-m-d');

    Appointment::create([
        'fullname'         => $request->fullname,
        'email'            => $request->email,
        'phone'            => $request->phone,
        'choosedoctor'     => $request->choosedoctor,
        'selectdepartment' => $request->selectdepartment,
        'appointmentdate'  => $appointmentdate,
        'message'          => $request->message,
        'ip'               => $request->ip(),
    ]);

    return back()->with('success', 'Your appointment has been submitted successfully!');
}

}

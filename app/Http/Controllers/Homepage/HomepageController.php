<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.homepage');
    }
    public function appointmentMiking()
    {
        return view('homepage.makeappointment');
    }
    public function createAppointmentSchedule(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'issue' => 'required',
            'problem' => 'required',
            'device_type' => 'required',
            'device_model' => 'required',
            'devicePhoto' => 'required|Image|mimes:jpg,png'
        ]);

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'issue' => $request->issue,
            'problem' => $request->problem,
            'device_type' => $request->device_type,
            'device_model' => $request->device_model,
            'devicePhoto' => $request->devicePhoto
        ];

        Mail::to('o.lermovenz@gmail.com')->send(new AppointmentEmail($data));
        return redirect(route('thankyou'));
    }

    public function Thankyou()
    {
        return view('homepage.thankyou');
    }
}

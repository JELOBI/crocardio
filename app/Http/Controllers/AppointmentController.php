<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AppointmentController extends BaseController
{    
    function bookAppointment(){
    	return view('appointment.book-appointment');
    }
}

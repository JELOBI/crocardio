<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PatientsController extends BaseController
{    
    function allPatients(){
    	return view('patients.all-patients');
    }
    
    function addPatients(){
    	return view('patients.add-patients');
    }
    
    function patientsProfile(){
    	return view('patients.patients-profile');
    }
    
    function invoice(){
    	return view('patients.invoice');
    }
}

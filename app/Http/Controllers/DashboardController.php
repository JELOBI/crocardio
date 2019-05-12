<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    function index(){
    	return view('dashboard.index');
    }

    function index_main_doctor(){
        return view('main-doctor.dashboard.index');
    }


}

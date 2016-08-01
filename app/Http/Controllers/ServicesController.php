<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
	{			
		return view('services.page-functioning-index');
    }
    public function getFunctioningWeb()
    {
       return view('services.page-functioning-web');
    }
    public function getFunctioningApp()
    {
      return view('services.page-functioning-app');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class functioningController extends Controller
{
	public function index()
	{			
		return view('functioning.page-functioning-index');
  }
  public function getFunctioningWeb()
  {     
    return view('functioning.page-functioning-web');
  }
  public function getFunctioningApp()
  {     
    return view('functioning.page-functioning-app');
  }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class petsController extends Controller
{
	public function getPetsLost()
	{			
		return view('pets.page-pets-lost');
  }
  public function getPetsFound()
  {     
    return view('pets.page-pets-founds');
  }
}

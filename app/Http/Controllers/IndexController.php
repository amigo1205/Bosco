<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index()
	{			
		return view('general.page-index');
  }
	public function getContactUs()
	{			
		return view('general.page-contact-us');
  }
	public function getTermsConditions()
	{			
		return view('general.page-terms-conditions');
  }
  public function getHelp()
  {     
    return view('general.page-help');
  }
}

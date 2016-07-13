<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class reportsController extends Controller
{
	public function index()
	{			
		return view('reports.page-reports-index');
  }
}

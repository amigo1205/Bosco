<?php

namespace App\Http\Controllers;

use App\Report;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class petsController extends Controller
{
	public function getPetsLost()
	{
    $reports = Report::getDataReports('lost', FALSE, TRUE, 2, 'mascotas/perdidos');
		return view('pets.page-pets-lost', 
      [
        'reports' => $reports
      ]
    );
  }
  public function getPetsFound()
  {
    $reports = Report::getDataReports('found', FALSE, TRUE, 2, 'mascotas/perdidos');
    return view('pets.page-pets-founds', 
      [
        'reports' => $reports
      ]
    );
  }
}

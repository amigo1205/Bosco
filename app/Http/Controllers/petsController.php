<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Report;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class petsController extends Controller
{
	public function getPetsLost()
	{
    $reports = Report::getDataReports('lost', FALSE, TRUE, 10, 'mascotas/perdidos');
		return view('pets.page-pets-lost', 
      [
        'reports' => $reports
      ]
    );
  }

  public function getPetsFound()
  {
    $reports = Report::getDataReports('found', FALSE, TRUE, 10, 'mascotas/perdidos');
    return view('pets.page-pets-founds', 
      [
        'reports' => $reports
      ]
    );
  }

  public function getPetsDetail(Request $request)
  {
    if ($request->isMethod('get')){
      $id = $_GET['petid'];
      $status = $_GET['status'];
      $pet = Pet::getDataPet($id, $status);
      return response()->json([
        'result' => TRUE, 
        'path' => url(''), 
        'pet' => $pet
      ]);
    }
  }
}

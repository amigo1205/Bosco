<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Ubigeo;
use App\Report;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class petsController extends Controller
{
	public function getPetsLost(Request $request)
	{
    $ubigeoId = FALSE;
    if ($request->isMethod('get')){
      if ($request->get('district')) {
        $ubigeoId = $request->get('district');
      }
    }
    $optionDepartments = FALSE;
    $departments = Ubigeo::getDataDepartments();
    if (!empty($departments)) {
      $optionDepartments = '<option value="" default="">Departamento</option>' . "\n";
      foreach ($departments as $key => $value) {
        $optionDepartments .= '<option value="' . $key . '">' . $value . '</option>' . "\n";
      }
    }
    $parameters = array(
      'status' => 'lost', 
      'userid' => FALSE
    );
    if ($ubigeoId) $parameters['ubigeoid'] = $ubigeoId;
    $reports = Report::getDataReports($parameters, TRUE, 10, 'mascotas/perdidos');
		return view('pets.page-pets-lost', 
      [
        'optionDepartments' => $optionDepartments, 
        'reports' => $reports
      ]
    );
  }

  public function getPetsFound()
  {
    $ubigeoId = FALSE;
    if ($request->isMethod('get')){
      if ($request->get('district')) {
        $ubigeoId = $request->get('district');
      }
    }
    $optionDepartments = FALSE;
    $departments = Ubigeo::getDataDepartments();
    if (!empty($departments)) {
      $optionDepartments = '<option value="" default="">Departamento</option>' . "\n";
      foreach ($departments as $key => $value) {
        $optionDepartments .= '<option value="' . $key . '">' . $value . '</option>' . "\n";
      }
    }
    $parameters = array(
      'status' => 'found', 
      'userid' => FALSE
    );
    if ($ubigeoId) $parameters['ubigeoid'] = $ubigeoId;
    $reports = Report::getDataReports($parameters, TRUE, 10, 'mascotas/perdidos');
    return view('pets.page-pets-founds', 
      [
        'optionDepartments' => $optionDepartments, 
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

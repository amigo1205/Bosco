<?php

namespace App\Http\Controllers;

use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class locationsController extends Controller
{
  public function getLocationsCity(Request $request)
  {
    if ($request->isMethod('get')){
      //$id = $_GET['countryid'];
      //$cities = Location::getDataLocationsCity($id);
      $cities = '
        <option default="">Ciudad</option>' . "\n" . 
        '<option value="1">Lima</option>' . "\n" . 
        '<option value="2">Huancayo</option>' . "\n" . 
        '<option value="3">Cusco</option>
      ';
      return response()->json([
        'result' => TRUE, 
        'cities' => $cities
      ]);
    }
  }

  public function getLocationsDistrict(Request $request)
  {
    if ($request->isMethod('get')){
      //$id = $_GET['cityid'];
      //$districts = Location::getDataLocationsDistrict($id);
      $districts = '
        <option default="">Distrito</option>' . "\n" . 
        '<option value="1">Centro</option>' . "\n" . 
        '<option value="2">Jesús María</option>' . "\n" . 
        '<option value="3">Breña</option>' . "\n" . 
        '<option value="4">Los Olivos</option>
      ';
      return response()->json([
        'result' => TRUE, 
        'districts' => $districts
      ]);
    }
  }
}

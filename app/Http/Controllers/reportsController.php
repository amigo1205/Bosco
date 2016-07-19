<?php

namespace App\Http\Controllers;

use App\Report;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reportsController extends Controller
{
	public function index()
	{
    $reports['lost'] = Report::getDataReports('lost', 2, FALSE);
    $reports['founds'] = Report::getDataReports('found', 2, FALSE);
    return view('reports.page-reports-index', 
      [
        'reports' => $reports
      ]
    );
  }

  public function getReportsDetailLost(Request $request)
  {
    if ($request->isMethod('get')){
      $id = $_GET['reportid'];
      $report = Report::getDataReport($id, 'lost');
      return response()->json([
        'result' => TRUE, 
        'path' => url(''), 
        'pet' => $report
      ]);
    }
  }

  public function getReportsDetailFound(Request $request)
  {
    if ($request->isMethod('get')){
      $id = $_GET['reportid'];
      $report = Report::getDataReport($id, 'found');
      return response()->json([
        'result' => TRUE, 
        'path' => url(''), 
        'pet' => $report
      ]);
    }
  }

  public function sendReport(Request $request)
  {
    return response()->json([
      'result' => TRUE
    ]);
  }

}

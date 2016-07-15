<?php

namespace App\Http\Controllers;

use App\Report;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
}

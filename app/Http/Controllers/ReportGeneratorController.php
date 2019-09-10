<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportGeneratorController extends Controller
{
    public function createReportStep1()
    {
        return view('createReport.step1');
    }
    public function createReportStep2()
    {
        return view('createReport.step2');
    }
    public function createReportStep3()
    {
        return view('createReport.step3');
    }
    public function reportDetails()
    {
        return view('report.reportDetails');
    }
    
}

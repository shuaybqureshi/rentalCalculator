<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\report_info as Report;
use App\purchase_info as Purchase;
use App\growth as Growth;
use App\exp_inc as Expenses;

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
    
    public function storeReport1(request $request){
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:100'],
            'mls' => ['required', 'string', 'max:50'],
            'city' => ['required', 'string', 'max:50'],
            'postal' => ['required', 'string', 'max:10'],
            ]);
            // Auth::user();
            $report =Auth::user()->report_info()->create($request->all());
            $request->session()->put('report_id', $report->id);
            return redirect()->route('createReportStep2');
        }
        
        public function storeReport2(request $request){
           
            $validatedData = $request->validate([
                'purchase_price' => 'required|numeric',
                'arv' => 'required|numeric',
                'closing_cost' => 'required|numeric',
                'repairs' => 'required|numeric',
                'down_payment' => 'required|numeric',
                'amortization' => 'required|numeric',
                ]);
                echo "tets";
                echo $report_id = $request->session()->pull('report_id');
                $request->session()->put('report_id', $report_id);
                echo 
                // Auth::user();
                $report =Report::find($report_id);
                $report->purchase_info()->create($request->all());
                // $request->session()->put('report_id', $report->id);
                return redirect()->route('createReportStep3');
            }
            public function storeReport3(request $request){
           echo "ets";
                $validatedData = $request->validate([
                    'rental_income' => 'required|numeric',
                    'other_income' => 'required|numeric',
                    'electricity' => 'required|numeric',
                    'water' => 'required|numeric',
                    'gas' => 'required|numeric',
                    'insurance' => 'required|numeric',
                    'pmi' => 'required|numeric',
                    'taxes' => 'required|numeric',
                    'other' => 'required|numeric',
                    'vacancy' => 'required|numeric',
                    'capex' => 'required|numeric',
                    'management' => 'required|numeric',
                    'income' => 'required|numeric',
                    'property_value' => 'required|numeric',
                    'expenses' => 'required|numeric',
                    ]);

                    $report_id = $request->session()->pull('report_id');
                $request->session()->put('report_id', $report_id);

                    $report =Report::find($report_id);
                    $report->growth()->create($request->all());
                    $report->exp_inc()->create($request->all());
                    // return redirect()->route('createReportStep3');
                }

                public function myReports(){ 
                     $reports= Auth::user()->report_info()->get();
                    return view('report.myReports', compact('reports'));


                }

                public function editReportStep1(request $request){
                   $report_id=  $_POST['report_id'];
                   $request->session()->put('report_id', $report_id);
                 $report =Report::find($report_id);

              return view('editReport.step1', compact('report'));

                }
                public function editReportStep2(request $request){ 
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                    echo  $purchase =Purchase::find($report_id);
                    return view('editReport.step2', compact('purchase'));

                }
                public function editReportStep3(request $request){ 
                    
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                      $expenses =Expenses::find($report_id);
                      $growth =Growth::find($report_id);
                    return view('editReport.step3', compact('growth','expenses'));
                }

                public function updateReportStep1(request $request){
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                    $report= Report::find($report_id);
                    $input = $request->all();
                    $report->fill($request->all())->save();
                    return redirect('/editReportStep2');
                }
                public function updateReportStep2(request $request){
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                    $purchase= Purchase::find($report_id);
                    $input = $request->all();
                    $purchase->fill($request->all())->save();
                    return redirect('/editReportStep3');
                }

                public function updateReportStep3(request $request){
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                    $expenses =Expenses::find($report_id);
                      $growth =Growth::find($report_id);
                      $input = $request->all();
                      $expenses->fill($request->all())->save();
                      $growth->fill($request->all())->save();
                    return redirect('/myReports');

                }
                public function editReportStep1get(request $request){
                    $report_id = $request->session()->pull('report_id');
                    $request->session()->put('report_id', $report_id);
                  $report =Report::find($report_id);
               return view('editReport.step1', compact('report'));
                }

}

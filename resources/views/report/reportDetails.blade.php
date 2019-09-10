@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<!-- start  -->
<div class="mr-2">
                        <h1 class="section-heading center">Rental Property Analysis</h2>
                        <h6 class="center">Address</h6>
                    </div>
                        
    <div id="accordion">
    <div class="card">
    <div class="card-header" id="headingZero">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
          Key Metrics
        </button>
      </h5>
    </div>
    <div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordion">
      <div class="card-body">
      <div class="row text-center font-1rem p-3">
      <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Loan Information</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Down Payment</th>
                                        <td>$35,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loan Amount</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Amortization Period</th>
                                        <td>30 years</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interest Rate</th>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" scope="row">Monthly P&I</th>
                                        <td class="font-weight-bold" >$2,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Loan Information</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Down Payment</th>
                                        <td>$35,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loan Amount</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Amortization Period</th>
                                        <td>30 years</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interest Rate</th>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" scope="row">Monthly P&I</th>
                                        <td class="font-weight-bold" >$2,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        
                           
                        </div>
           </div>
    </div>
    
  </div>  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Given Data  </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="row margin-top-2">
                        <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Property Information</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Purchase Price</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Closing Costs</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr  >
                                        <th scope="row">Repair Costs</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr>
                                        <th  class="font-weight-bold" scope="row">Total Cost of Project</th>
                                        <td class="font-weight-bold" >$120,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">After Repair Value</th>
                                        <td>$135,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Loan Information</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Down Payment</th>
                                        <td>$35,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loan Amount</th>
                                        <td>$135,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Amortization Period</th>
                                        <td>30 years</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interest Rate</th>
                                        <td>2%</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" scope="row">Monthly P&I</th>
                                        <td class="font-weight-bold" >$2,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        
                        <div class=" col-md-12">
                        <h3 class="font-weight-500">Expenses</h3>
                            <canvas id="pieChart"></canvas>
                            <div class="row margin-top-2 results-para-style">
                                <div class="col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class="col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class="col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class=" col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class="col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class=" col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class="col-md-4">
                                    Expense #1: $100
                                </div>
                                <div class=" col-md-4">
                                    Expense #1: $100
                                </div>
                            </div>
                            <div class="font-weight-bold float-left"> Total Expenses: $2000</div>
                            <div class="font-weight-bold float-right"> Total Income: $2500</div>
</div>

    </div>
    </div>
  </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Monthly Analysis #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      <div class="row">
      <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Cash Flow</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Income</th>
                                        <td>$2,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Expenses</th>
                                        <td>$1,000</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" scope="row">Cash Flow</th>
                                        <td class="font-weight-bold" >$2,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group col-md-6">
                            <h3 class="font-weight-500">Cash and  Equity Flow</h3>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Equity Growth</th>
                                        <td>$500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Interest Payment</th>
                                        <td>$400</td>
                                    </tr>
                                    <tr>
                                        <th class="font-weight-bold" scope="row">Cash Flow + Equity Growth</th>
                                        <td class="font-weight-bold" >$2,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            <div class="form-group col-md-6">
                                <h3 class="font-weight-500">50% Rule Cash Flow</h3>
                                <div class="results-para-style">Total Monthly Income : <span
                                        class="float-right">$2,500.00</span>
                                </div>
                                <div class="results-para-style">x50% for Expenses: <span class="float-right">$1,250.00</span>
                                </div>
                                <div class="results-para-style">Monthly Payment/Interest Payment: : <span
                                        class="float-right">$815.81</span> </div>
                                <div class="results-para-style">Total Monthly Cashflow using 50% Rule:: <span
                                        class="float-right">$500</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                            </div>
                        </div>      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Financial Projections

        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <div class="grey-background row text-center font-1rem p-3">
                            <div class=" col-md-3 p-1">
                                <div class="font-weight-bold">Annual Growth
                                    Assumptions</div>
                            </div>
                            <div class=" col-md-3 p-1">
                                <div class="font-weight-bold">2%</div>
                                <div>Expenses</div>
                            </div>
                            <div class=" col-md-3 p-1">
                                <div class="font-weight-bold">2%</div>
                                <div>Income</div>
                            </div>
                            <div class=" col-md-3 p-1">
                                <div class="font-weight-bold">2%</div>
                                <div>Property Value</div>
                            </div>

                        </div>
                        <div class="table-responsive text-nowrap">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Year 1</th>
                                        <th scope="col">Year 2</th>
                                        <th scope="col">Year 5</th>
                                        <th scope="col">Year 10</th>
                                        <th scope="col">Year 20</th>
                                        <th scope="col">Year 30</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Total Annual Income</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Total Annual Expenses</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Total Annual Cashflow</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cash on Cash ROI</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Property Value</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loan Balance</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                            <th scope="row">Total Profit if Sold </th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                        </tr>
                                        <tr>
                                                <th scope="row">Annualized Total Return </th>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                                <td>Cell</td>
                                            </tr>
                                </tbody>
                            </table>

                        </div>      </div>
    </div>
  </div>
</div>
  
                        <hr>

                        <button type="submit" class="float-left btn ">Previous Step</button>
                        <button type="submit" class="float-right btn btn-primary">Next Step</button>
         <!-- END -->
        </div>
      </div>
    </div>
</div>
@include('components.footer')

@endsection

@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    
<!-- Horizontal Steppers -->
@include('components.stepper')

<h3>Income</h3>
<form class="calc-form"  method="POST" action="{{ route('updateReportStep3') }}">
        @csrf
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Rental Income<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="rental_income"  step="0.01" min="0" class="form-control @error('rental_income') is-invalid @enderror" name="rental_income"  value="{{$expenses->rental_income}}"  autocomplete="rental_income" autofocus required  >
                                    @error('rental_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">Other Income</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="other_income"  step="0.01" min="0" class="form-control @error('other_income') is-invalid @enderror" name="other_income"  value="{{$expenses->other_income }}"  autocomplete="other_income" autofocus required  >
                                    @error('other_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <h3>Fixed Landlord-Paid Expenses</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Electricity</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                     --}}
                                     <input type="number"  step="0.01" min="0" id="electricity" class="form-control @error('electricity') is-invalid @enderror" name="electricity"  value="{{$expenses->electricity}}"  autocomplete="electricity" autofocus required  >
                                    @error('electricity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">Gas</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number"  step="0.01" min="0" id="gas" class="form-control @error('gas') is-invalid @enderror" name="gas"  value="{{ $expenses->gas }}"  autocomplete="gas" autofocus required  >
                                    @error('gas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Water & Sewer</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="water"  step="0.01" min="0" class="form-control @error('water') is-invalid @enderror" name="water"  value="{{$expenses->water }}"  autocomplete="water" autofocus   >
                                    @error('water')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">PMI</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="pmi" step="0.01" min="0" class="form-control @error('pmi') is-invalid @enderror" name="pmi"  value="{{ $expenses->pmi }}"  autocomplete="pmi" autofocus required  >
                                    @error('pmi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Insurance</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" id="insurance" step="0.01" min="0"  class="form-control @error('insurance') is-invalid @enderror" name="insurance"  value="{{ $expenses->insurance }}"  autocomplete="insurance" autofocus required  >
                                    @error('insurance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">Taxes</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="taxes" id="taxes" step="0.01" min="0"  class="form-control @error('taxes') is-invalid @enderror" name="taxes"  value="{{ $expenses->taxes }}"  autocomplete="taxes" autofocus required  >
                                    @error('taxes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Other Expenses</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" step="0.01" min="0" id="other" class="form-control @error('other') is-invalid @enderror" name="other"  value="{{ $expenses->other }}"  autocomplete="other" autofocus required  >
                                    @error('other')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <h3>Variable Landlord-Paid Expenses</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Vacancy</label>
                                <div class="input-group mb-3">

                                        <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>                                    <input type="number" id="vacancy" step="0.01" min="0" class="form-control @error('vacancy') is-invalid @enderror" name="vacancy"  value="{{$expenses->vacancy }}"  autocomplete="vacancy" autofocus required  >
                                   
                                    
                                    @error('vacancy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="electricity">Capital Expenditures</label>
                                <div class="input-group mb-3">
                                        <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                        <input type="number" id="capex" class="form-control @error('capex') is-invalid @enderror" name="capex"  value="{{$expenses->capex }}"  autocomplete="capex" autofocus required  >
                                    
                                    @error('capex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="electricity">Management Fees</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                        <input type="number" id="management" class="form-control @error('management') is-invalid @enderror" name="management"  value="{{$expenses->management}}" autocomplete="management" autofocus required  >
                                                                        
                                        @error('management')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror   
                               
                                </div>
                            </div>
                       

                        </div>
                        <h3>Future Assumptions</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="electricity">Annual Income Growth</label>
                                <div class="input-group mb-3">

                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="income" class="form-control @error('income') is-invalid @enderror" name="income"  value="{{ $growth->income }}"  autocomplete="income" autofocus required  >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    @error('income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="electricity">Annual PV Growth</label>
                                <div class="input-group mb-3">

                                        <input type="number" id="property_value" class="form-control @error('property_value') is-invalid @enderror" name="property_value"  value="{{ $growth->property_value}}"  autocomplete="property_value" autofocus required  >
                                                                         <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                        
                                    </div>
                                    @error('property_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                                    
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="electricity">Annual Expenses Growth</label>
                                <div class="input-group mb-3">
                                        <input type="number" id="expenses" class="form-control @error('expenses') is-invalid @enderror" name="expenses"  value="{{$growth->expenses}}"  autocomplete="expenses" autofocus required  >
                                       
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    @error('expenses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                       <a href="/editReportStep2" class="float-left btn">Previous Step</a>
                        <button type="submit" class="float-right btn btn-primary">Next Step</button>
                    </form>
         
        </div>
      </div>
    </div>
</div>
@include('components.footer')

@endsection

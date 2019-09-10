@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    
<!-- Horizontal Steppers -->
@include('components.stepper')

<h3>Purchase Details</h3>
                    <form class="calc-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Purchase Price<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">After Repair Value <span class="required">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="city">Purchase Closing Cost</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="postalCode">Estimated Repair Cost </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>
                        </div>
                        <h3>Loan Details</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Down Payment %<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Loan Interest Rate (%)<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">Amortization (years) <span class="required">*</span> </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">years</span>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                      
                        <hr>

                        <button type="submit" class="float-right btn btn-primary">Next Step</button>
                    </form>
         
        </div>
      </div>
    </div>
</div>
@include('components.footer')

@endsection

@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    
<!-- Horizontal Steppers -->
@include('components.stepper')

<h3>Purchase Details</h3>
                    <form class="calc-form"  method="POST" action="{{ route('updateReportStep2')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Purchase Price<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="purchase_price" class="form-control @error('purchase_price') is-invalid @enderror" name="purchase_price"  value="{{$purchase->purchase_price}}"  autocomplete="purchase_price" autofocus required  >
                                    @error('purchase_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mls">After Repair Value <span class="required">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="arv" class="form-control @error('arv') is-invalid @enderror" name="arv"  value="{{ $purchase->arv}}"  autocomplete="arv" autofocus required  >
                                    @error('arv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="closing_cost" class="form-control @error('closing_cost') is-invalid @enderror" name="closing_cost"  value="{{ $purchase->closing_cost}}"  autocomplete="closing_cost" autofocus required  >
                                    @error('closing_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="postalCode">Estimated Repair Cost </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" id="repairs" class="form-control @error('repairs') is-invalid @enderror" name="repairs"  value="{{ $purchase->repairs}}"  autocomplete="repairs" autofocus required  >
                                    @error('repairs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <h3>Loan Details</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Down Payment %<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" step="0.01" min="0" id="down_payment" class="form-control @error('down_payment') is-invalid @enderror" name="down_payment"  value="{{ $purchase->down_payment}}"  autocomplete="down_payment" autofocus required  >
                                    
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    @error('down_payment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Loan Interest Rate (%)<span class="required">*</span> </label>
                                <div class="input-group mb-3">
                                    {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                    <input type="number" step="0.01" min="0" id="amortization" class="form-control @error('amortization') is-invalid @enderror" name="amortization"  value="{{ $purchase->amortization}}"  autocomplete="amortization" autofocus required  >
                                   
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    @error('amortization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">Amortization (years) <span class="required">*</span> </label>
                                    <div class="input-group mb-3">
                                        {{-- <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"> --}}
                                        <input type="number" id="amortization" class="form-control @error('amortization') is-invalid @enderror" name="amortization"  value="{{ $purchase->amortization}}"  autocomplete="amortization" autofocus required  >
                                  
                                        <div class="input-group-append">
                                            <span class="input-group-text">years</span>
                                        </div>
                                        @error('amortization')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                              
                            </div>
                      
                        <hr>
                        <a href="/editReportStep1" class="float-left btn">Previous Step</a>
                        <button type="submit" class="float-right btn btn-primary">Next Step</button>
                    </form>
         
        </div>
      </div>
    </div>
</div>
@include('components.footer')

@endsection

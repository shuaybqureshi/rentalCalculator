@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    
<!-- Horizontal Steppers -->
@include('components.stepper')

          <form class="calc-form">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="reportTitle">Report Title</label>
                <input type="text" class="form-control" id="reportTitle" name="reportTitle" placeholder="Analysis on 1234 Main St">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
              </div>
              <div class="form-group col-md-6">
                  <label for="mls">MLS® Number</label>
                  <input type="text" class="form-control" id="mls" name="mls" placeholder="LA1299">
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Toronto">
              </div>
              <div class="form-group col-md-6">
                <label for="postalCode">Postal Code</label>
                <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="M4B1H2">
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

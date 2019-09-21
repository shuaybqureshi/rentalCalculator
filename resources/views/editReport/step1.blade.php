@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
    
<!-- Horizontal Steppers -->
@include('components.stepper')
              <form class="step-2"  method="POST" action="{{ route('updateReportStep1')}} ">
                  @csrf
            <div class="form-row">
              <div class="form-group col-md-8">
              <label for="title">Report Title</label>
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  value="{{ $report->title}} "  autocomplete="title" autofocus required  >
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address">Address</label>
                {{-- <input type="text" class="form-control" id="address" name="address" > --}}
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"  value="{{ $report->address}}"  autocomplete="address" autofocus required  >
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="form-group col-md-6">
                  <label for="mls">MLS® Number</label>
                  {{-- <input type="text" class="form-control" id="mls" name="mls" > --}}
                  <input id="mls" type="text" class="form-control @error('mls') is-invalid @enderror" name="mls"  value="{{ $report->mls}}"  autocomplete="mls" autofocus required  >
                  @error('mls')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror

                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="city">City</label>
                {{-- <input type="text" class="form-control" id="city" name="city" > --}}
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"  value="{{ $report->city}}"  autocomplete="city" autofocus required  >
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="postal">Postal Code</label>
                <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror" name="postal"  value="{{ $report->postal}}"  autocomplete="postal" autofocus required  >
                {{-- <input type="text" class="form-control" id="postal" name="postal" > --}}
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
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

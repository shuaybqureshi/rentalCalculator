@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
      <div class="row">
        <div class=" col-md-12 mx-auto">
<!-- start  -->
<div class="mr-2">
                        <h1 class="section-heading center">My Reports</h2>
                            
                    </div>
                    @if(count($reports))
                <div class="table-container">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Report Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Edit </th>
                                    <th scope="col">View </th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?> 
                    @foreach($reports as $report)

                                <tr>
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$report->title}}</td>
                                    <td>{{$report->address}}</td>
                                    <form method="POST"  > 
                                        @csrf
                                    <td>
                                        <button type="submit" formaction="{{ route('editReportStep1') }}" class="btn btn-yellow btn-sm m-0">Edit</button>
                                    </td>
                                    <input hidden type="number" name="report_id" value={{$report->id}} />
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm m-0">View</button>
                                    </td>
                                    <td>
                                            <button type="button" class="btn btn-secondary btn-sm m-0">Download PDF</button>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                         
                            </tbody>
                        </table>
                        
                </div>
                @else
                <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">No Reports found</h5>
                          {{-- <h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6> --}}
                          <p class="card-text">We could not find any reports under this user account. Use the link below to create a new a report.</p>
                          <a href="#!" class="card-link">Create A Report</a>
                        </div>
                    </div>
                @endif

         
                     <!-- END -->
        </div>
      </div>
    </div>
</div>
@include('components.footer')

@endsection

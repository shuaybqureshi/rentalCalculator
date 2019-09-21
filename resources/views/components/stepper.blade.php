<div class="mr-2">
            <h1 class="section-heading center">Rental Property Analysis</h2>
          </div>
          <div class="mr-2">
  <!-- Horizontal Steppers -->
  <div class="row">
                            <div class="col-md-12">
                                <!-- Stepers Wrapper -->
                                <ul class="stepper stepper-horizontal">
                                    <!-- First Step -->

                                <li class="{{ (Request::path()=='createReportStep1') ? 'active' : '' }}">
                                        <a href="#!">
                                            <span class="circle">1</span><br>
                                            <span class="label">Property Information</span>
                                        </a>
                                    </li>
{{-- {{Request::path('createReporstStep1')}} --}}
{{-- {{Request::url()}} --}}
                                    <!-- Second Step -->
                                    <li class="{{(Request::path()=='createReportStep2')? 'active' : '' }}">
                                        <a href="#!">
                                            <span class="circle">2</span><br>
                                            <span class="label">Purchase Details</span>
                                        </a>
                                    </li>
                                    <!-- Second Step -->
                                    <li class="{{(Request::path()=='createReportStep3') ? 'active' : '' }}">
                                    <a href="#!">
                                            <span class="circle">3</span> <br>
                                            <span class="label">Expenses</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.Stepers Wrapper -->
                                <hr>
                            </div>
                        </div>
                        <!-- /.Horizontal Steppers -->
    </div>

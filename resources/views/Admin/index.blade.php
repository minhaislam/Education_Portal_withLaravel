@extends('layouts.nav')

@section('analytics')
  <div class="row">
       
          
             
        
              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-body">
                      <div class="card-info-title">Total Students</div>
                      <h3 class="card-title mb-0">
                  		{{ Request::get('totalstudent') }}
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                  
                    <div class="card-body">
                      <div class="card-info-title">Total Teachers</div>
                      <h3 class="card-title mb-0">
                      {{ Request::get('totalteacher') }}
                      </h3>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-lg-3 d-flex">
                <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                  
                    <div class="card-body">
                      <div class="card-info-title">Total Admins</div>
                      <h3 class="card-title mb-0">
                   {{ Request::get('totaladmin') }}
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>



@endsection
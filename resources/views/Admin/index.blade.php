@extends('layouts.nav')

@section('analytics')

   <div class="row">
      @php 
        $bgColor = ['bg-success', 'bg-primary', 'bg-danger', 'bg-info'];
      @endphp

      @foreach($counters as $counter)
        <div class="col-md-6 col-lg-3 d-flex">
          <div class="card border-0 {{ $bgColor[array_rand($bgColor)] }} text-white text-center mb-grid w-100">
            <div class="d-flex flex-row align-items-center h-100">
            
              <div class="card-body">
                <div class="card-info-title">Total {{ $counter->type }} </div>
                <h3 class="card-title mb-0">
                  {{ $counter->total }}
                </h3>
              </div>
            </div>
          </div>
        </div>
      @endforeach  
    </dcounter


@endsection
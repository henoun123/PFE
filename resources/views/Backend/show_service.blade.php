@extends('layouts.master')

@section('title'){{ 'Show service' }} @endsection
@section('content')
<h2>Affiche service</h2>
<div class="container"   >
    <div class="card ">

        <div class="">

          <p class="card-text">  <span><a href="{{ route('service.index')}}"> <i class="fas fa-angle-double-left fa-5x"></i></a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">

        <div class="form-group">
            nom de service :
          <label for="exampleFormControlInput1"> {{ $service->nom}} </label>
      
        </div>
        <div class="form-group">
            Patologie Appartient :
            <label for="exampleFormControlInput1">
                 @foreach ($service->pathelogies as $patologie )
                 {{ $patologie->nom}},
            @endforeach  
        </label>
        
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $service->date_creation}} </label>
        
          </div>
          

        <div class="form-group">
         
            {{-- {!! $product->detail  !!}
         --}}
        </div>

</div>





@endsection
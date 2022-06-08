@extends('layouts.master')

@section('title'){{ 'Show patient' }} @endsection
@section('content')
<h2>Affiche Patient</h2>
<div class="container"   >
    <div class="card ">

        <div class="">

          <p class="card-text">  <span><a href="{{ route('patient.index')}}"> <i class="fas fa-angle-double-left fa-5x"></i></a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">

        <div class="form-group">
          <label for="exampleFormControlInput1"> {{ $patient->nom}} </label>
      
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $patient->prenom}} </label>
        
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $patient->telephone}} </label>
        
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $patient->genre}}</label>
           
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $patient->date_naissance}}</label>
           
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $patient->date_reception}}</label>
           
          </div>

        <div class="form-group">
         
            {{-- {!! $product->detail  !!}
         --}}
        </div>

</div>





@endsection
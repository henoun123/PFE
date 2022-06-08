@extends('layouts.master')

@section('title'){{ 'Show examen ' }} @endsection
@section('content')
<h2>Affiche examen</h2>
<div class="container"   >
    <div class="card ">

        <div class="">

          <p class="card-text">  <span><a href="{{ route('examen.index')}}"> <i class="fas fa-angle-double-left fa-5x"></i></a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">

        <div class="form-group">
          <label for="exampleFormControlInput1"> {{ $examen->nom}} </label>
      
        </div>

   
       
        <div class="form-group">
         
           {{-- {{!! $product->detail  !!}}
         --}}
        </div>

</div>





@endsection
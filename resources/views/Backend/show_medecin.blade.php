@extends('layouts.master')

@section('title'){{ 'Show medecin ' }} @endsection
@section('content')
<h2>Affiche medecin</h2>
<div class="container"   >
    <div class="card ">

        <div class="">

          <p class="card-text">  <span><a href="{{ route('medecin.index')}}"> <i class="fas fa-angle-double-left fa-5x"></i></a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">

        <div class="form-group">
          <label for="exampleFormControlInput1"> {{ $medecin->nom}} </label>
      
        </div>

   
        <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $medecin->prenom}} </label>
        
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $medecin->telephone}} </label>
        
          </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $medecin->date_recritement}} </label>
        
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"> {{ $service->nom}} </label>
        
          </div>

        <div class="form-group">
         
            {{-- {!! $product->detail  !!}
         --}}
        </div>

</div>





@endsection
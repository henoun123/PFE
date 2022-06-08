@extends('layouts.master')

@section('title'){{ 'Show rendez vous ' }} @endsection
@section('content')
<h2>Affiche rendez vous</h2>
<div class="container"   >
    <div class="card ">

        <div class="">

          <p class="card-text">  <span><a href="{{ route('rendevou.index')}}"> <i class="fas fa-angle-double-left fa-5x"></i></a> </span> </p>
        </div>
      </div>
</div>


<div class="container" style="padding-top: 2%">

        <div class="form-group">
          <label for="exampleFormControlInput1"> {{ $rendevou->date_rendvous}} </label>
      
        </div>

   
       
        <div class="form-group">
         
            {{-- {!! $product->detail  !!}
         --}}
        </div>

</div>





@endsection
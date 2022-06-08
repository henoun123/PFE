@extends('layouts.master')

@section('title'){{ 'Edit service' }} @endsection
@section('content')
<h2>Édite service</h2>
<form action="{{ route('service.update',$service->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom" value="{{ $service->nom}}" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="date creation" value="{{ $service->date_creation}}"  class="form-control mt-3" name="date_creation">


    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
@extends('layouts.master')

@section('title'){{ 'Edit Examen' }} @endsection
@section('content')
<h2>Édite examen</h2>
<form action="{{ route('examen.update',$examen->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom examen" value="{{ $examen->nom}}"  class="form-control mt-3" name="nom">


    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
@extends('layouts.master')

@section('title'){{ 'create service' }} @endsection
@section('content')
<h2>Ajouter service</h2>
<form action="{{ route('service.store') }}" method ="POST" class="form-group">
@csrf
    <input type="text" placeholder="Nom" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="Date creation"  class="form-control mt-3" name="date_creation"  >
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>

    
@endsection 


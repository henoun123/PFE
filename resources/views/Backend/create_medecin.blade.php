@extends('layouts.master')

@section('title'){{ 'create medecin' }} @endsection

@section('content')
<h2>Ajouter medecin</h2>
<form action="{{ route('medecin.store') }}" method ="POST" class="form-group">
@csrf
 <input type="text" placeholder="Nom" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="Prenom" class="form-control mt-3" name="prenom"  >
    <input type="text" placeholder="Telephone"  class="form-control mt-3" name="telephone"  >
     <select name="service_id[]" id="service" class="form-control mt-3" multiple="multiple">
        <option disabled >choisir service</option>
        @foreach ($services as $service)
        <option value="{{$service->id}}">{{$service->nom}}</option>
        @endforeach
    </select>
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>
   
@endsection 


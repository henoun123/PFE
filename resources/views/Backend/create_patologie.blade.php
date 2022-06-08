@extends('layouts.master')

@section('title'){{ 'create Pathologie' }} @endsection
@section('content')
<h2>Ajouter Pathologie</h2>
<form action="{{ route('patologie.store') }}" method ="POST" class="form-group">
@csrf
<label for="">nom</label>
    <input type="text" placeholder="nom" class="form-control mt-3" name="nom"  >
    <select class="select2" name="service_id"  style="width: 100%">
        <option value="" disabled>choissier les patologies</option>
        @foreach ($services as $service)
            <option value="{{ $service->id }}" >{{ $service->nom }}</option>
        @endforeach
    </select>
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>
@endsection 


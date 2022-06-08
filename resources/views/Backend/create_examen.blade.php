@extends('layouts.master')

@section('title'){{ 'create Examen' }} @endsection
@section('content')
<h2>Ajouter examen</h2>
<form action="{{ route('examen.store') }}" method ="POST" class="form-group">
@csrf
<label for="">nom</label>
    <input type="text" placeholder="nom" class="form-control mt-3" name="nom"  >
    <br>
    <select class="select2" name="patient_id"   style="width: 100%">
        <option disabled >selectionner le patiant examiner</option>
        @foreach ($patients as $patient )
            <option value="{{ $patient->id }}">{{ $patient->nom }}</option>
        @endforeach
    </select>
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>
@endsection 


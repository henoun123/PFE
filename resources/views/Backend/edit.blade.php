@extends('layouts.master')

@section('title'){{ 'Edit patient' }} @endsection
@section('content')
<h2>Édite patient</h2>
<form action="{{ route('patient.update',$patient->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom" value="{{ $patient->nom}}" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="prenom" value="{{ $patient->prenom}}"  class="form-control mt-3" name="prenom"  >
    <input type="text" placeholder="telephone" value="{{ $patient->telephone}}"  class="form-control mt-3" name="telephone"  >
    <input type="text" placeholder="genre" value="{{ $patient->genre}}"  class="form-control mt-3" name="genre"  >
    <input type="text" placeholder="date naissance" value="{{ $patient->date_naissance}}"  class="form-control mt-3" name="date_naissance"  >
    <input type="text" placeholder="date réception" value="{{ $patient->date_reception}}"  class="form-control mt-3" name="date_reception"  >
    {{-- <select name="genre" id="genre" class="form-control mt-3">
        <option disabled >choisir diplome</option>
        <option >masculin</option>
        <option >feminin</option>

        <option></option>
  
    </select> --}}
    

    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
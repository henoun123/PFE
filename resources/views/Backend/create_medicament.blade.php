@extends('layouts.master')

@section('title'){{ 'create medicament' }} @endsection

@section('content')
<h2>Ajouter medicament</h2>
<form action="{{ route('medicament.store') }}" method ="POST" class="form-group">
@csrf
     <input type="text" placeholder="Nom" class="form-control mt-3" name="nom"  >
     <input type="text" placeholder="abreviation" class="form-control mt-3" name="abrv"  >
    <input type="text" placeholder="date production"  class="form-control mt-3" name="dateproduction"  >
    <input type="text" placeholder="date pexpiration"  class="form-control mt-3" name="dateexpiration"  >
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
    </div>
 
    
    </form>
   
@endsection 


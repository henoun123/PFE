@extends('layouts.master')

@section('title'){{ 'Edit medicament' }} @endsection
@section('content')
<h2>Édite medicament</h2>
<form action="{{ route('medicament.update',$medicament->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom" value="{{ $medicament->nom}}" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="abrv" value="{{ $medicament->abrv}}" class="form-control mt-3" name="abrv"  >
    <input type="text" placeholder="dateproduction" value="{{ $medicament->dateproduction}}" class="form-control mt-3" name="dateproduction"  >
    <input type="text" placeholder="dateexpiration" value="{{ $medicament->dateexpiration}}" class="form-control mt-3" name="dateexpiration"  >


    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
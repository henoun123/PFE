@extends('layouts.master')

@section('title'){{ 'create rendez vous' }} @endsection
@section('content')
<h2>Ajouter rendez vous</h2>
<form action="{{ route('rendevou.store') }}" method ="POST" class="form-group">
@csrf
<label for="">Date rendez vous</label>
    <input type="date" placeholder="Date rendez vous" class="form-control mt-3" name="date_rendvous"  >
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>
@endsection 


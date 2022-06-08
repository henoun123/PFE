 @extends('layouts.master')

 @section('title'){{ 'create patient' }} @endsection
@section('content')
<h2>Ajouter patient</h2>
<form action="{{ route('patient.store') }}" method ="POST" class="form-group">
@csrf
    <input type="text" placeholder="Nom" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="Prenom"  class="form-control mt-3" name="prenom"  >
    <input type="text" placeholder="Telephone"  class="form-control mt-3" name="telephone"  >
    <select name="genre" class="form-control mt-3">
        <option disabled >Sexe</option>
        <option  >M</option>
        <option  >F</option>
    </select>
    <br>
    <select class="select2" name="patologie_id[]" multiple  style="width: 100%">
        <option disabled >selectionner le maladie</option>
        @foreach ($patologies as $patologie )
            <option value="{{ $patologie->id }}">{{ $patologie->nom }}</option>
        @endforeach
    </select>
    <input type="text" placeholder="date naissance"  class="form-control mt-3" name="date_naissance"  >
    <input type="text" placeholder="date réception"  class="form-control mt-3" name="date_reception"  >
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
  
    </div>
 
    
    </form>
@endsection 


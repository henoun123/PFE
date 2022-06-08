@extends('layouts.master')

@section('title'){{ 'Edit medecin' }} @endsection
@section('content')
<h2>Édite medecin</h2>
<form action="{{ route('medecin.update',$medecin->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom" value="{{ $medecin->nom}}" class="form-control mt-3" name="nom"  >
    <input type="text" placeholder="nom" value="{{ $medecin->prenom}}" class="form-control mt-3" name="prenom"  >
    <input type="text" placeholder="nom" value="{{ $medecin->telephone}}" class="form-control mt-3" name="telephone"  >
    <input type="text" placeholder="nom" value="{{ $medecin->date_recritement}}" class="form-control mt-3" name="date_recritement"  >
    <select name="services[]" class="form-control select2" multiple="multiple">
        @forelse($services as $service)
            <option value="{{ $service->id }}" 
                {{ in_array($service->id, $medecin->services->pluck('id')->toArray()) ? 'selected' : null }}
                >{{ $service->nom }}</option>
        @empty
        @endforelse
    </select>

    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
@extends('layouts.master')

@section('title'){{ 'Edit Pathologie' }} @endsection
@section('content')
<h2>Édite Pathologie</h2>
<form action="{{ route('patologie.update',$patologie->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="nom Pathologie" value="{{ $patologie->nom}}"  class="form-control mt-3" name="nom">

    <select class="select2" name="service_id"  style="width: 75%">
        <option value="" disabled>choissier les patologies</option>
        @foreach ($services as $service)
            <option value="{{ $service->id }}"  {{ ($service->id==$patologie->service_id)?'selected':'' }}>{{ $service->nom }}</option>
        @endforeach
    </select>
    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
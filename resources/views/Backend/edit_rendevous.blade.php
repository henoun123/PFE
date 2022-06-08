@extends('layouts.master')

@section('title'){{ 'Edit rendez vous' }} @endsection
@section('content')
<h2>Édite rendez vous</h2>
<form action="{{ route('rendevou.update',$rendevou->id) }}" method ="POST" class="form-group">
@csrf
@method('PUT')
    <input type="text" placeholder="date rendez vous" value="{{ $rendevou->date_rendvous}}"  class="form-control mt-3" name="date_rendvous">


    <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3">Update</button>
  
    </div>
 
    
    </form>
@endsection
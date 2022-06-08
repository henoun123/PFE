@extends('layouts.master')

@section('title'){{ 'List medecin' }} @endsection
@section('content')
<h2>List medecin</h2>
<div class="col-lg-12">
    <div class="container" id="body">
     <div class="row">
     <div class="col-md-12">
        <div class="card-body">
            <div class="container">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary" role="alert">
                    Médecin ajouter
                  </div>  
                @endif
              
            </div> 
           
     <table class="table table-striped table-hover " id="example">

       <thead class="">
             <th>id</th>
              <th>nom</th>
             <th>prenom</th>
             <th>telephone</th>
             <th>date recritement</th>
             <th>Service</th>
             <th>Action</th>
        </thead>
         <tbody>
@php
    $i=0;

@endphp

@foreach ($medecin as $item)
             <tr>
                <th scope="row">{{++$i}}</th>
                <th>{{$item->nom}}</th>
                <th>{{$item->prenom}}</th>
                <th>{{$item->telephone}}</th>
                <th>{{$item->created_at}}</th>
                <th>
                    {{-- $medecin->services->pluck('id')->toArray()) ? 'selected' :  --}}
                     @foreach ($item -> services as $service)
                         {{ $service -> nom }}
                     @endforeach
                </th>
                 <td>

             <div class="row">
             <div class="col-sm-3">
                <a class="btn btn-success" href="{{route('medecin.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
            </div>
            
            <div class="row">
             <div class="col-sm">
                <a class="btn btn-primary" href="{{route('medecin.show',$item->id)}}"><i class="fas fa-solid fa-eye"></i></a>
            </div>
            <div class="row">
             <div class="col-sm">
                <form action="{{route('medecin.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash" name="sup"></i></button>
                    </form>           
                  </div>
                </div>
         </td>

             </tr>
             @endforeach

         </tbody>
         </table>
         {!! $medecin->links() !!}
       
    </div>
    </div>
    </div>
         </div>
         </div>
         {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         @if (Session ::get('success'))
             <script>
                 Swal.fire({
  position: 'center',
  icon: 'success',
  title: '',
  showConfirmButton: false,
  timer: 1500
})
             </script>
         @endif --}}
         <script>
              
         $(document).ready(function() {
            $('#example').DataTable( {
                    "scrollY":        "400px",
                    "scrollCollapse": true,
                    "paging":         true
                        } );
                    } );
            </script>
@endsection

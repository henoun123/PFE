@extends('layouts.master')

@section('title'){{ 'List medicament' }} @endsection
@section('content')
<h2>List medicament</h2>
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
             <th>abrv</th>
             <th>date production</th>
             <th>date expiration</th>
             <th>Action</th>
        </thead>
         <tbody>
@php
    $i=0;

@endphp

@foreach ($medicaments as $item)
             <tr>
                <th scope="row">{{++$i}}</th>
                <th>{{$item->nom}}</th>
                <th>{{$item->abrv}}</th>
                <th>{{$item->dateproduction}}</th>
                <th>{{$item->dateexpiration}}</th>
          
                 <td>

             <div class="row">
             <div class="col-sm-3">
                <a class="btn btn-success" href="{{route('medicament.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
            </div>
            
            <div class="row">
             <div class="col-sm">
                <a class="btn btn-primary" href="{{route('medicament.show',$item->id)}}"><i class="fas fa-solid fa-eye"></i></a>
            </div>
            <div class="row">
             <div class="col-sm">
                <form action="{{route('medicament.destroy', $item->id)}}" method="POST">
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
         {!! $medicaments->links() !!}
       
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

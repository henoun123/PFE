<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/dist/css/all.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@include('includes.header')
</head>

    <title>{{ config('header.name','laravel') }} -@yield('title')</title>

<body>
@include('includes.topbar')
@yield('content')
@include('includes.sidbare')
@include('includes.footer')


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

    $(".select2").select2({
      theme: "classic"
    });
    </script>
</body>
</html>

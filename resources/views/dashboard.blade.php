@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@php
    date_default_timezone_set('America/Guatemala');
    $hora_actual = date('G');
    
    if ($hora_actual >= 5 && $hora_actual < 12) {
        $saludo = 'Buenos Días, ';
    } elseif ($hora_actual >= 12 && $hora_actual < 18) {
        $saludo = 'Buenas Tardes, ';
    } else {
        $saludo = 'Buenas Noches, ';
    }
@endphp
@stop

@section('content')
   <div class="card position-relative">
    <img src="https://assets.materialup.com/uploads/cf947cf0-272a-452a-bb93-a8b7b7bdea95/preview.gif" alt="" class="img-fluid">
    <h5 class="position-absolute top-50 start-50 translate-middle mb-0">{{ $saludo }} <b>{{ $user->name }}</b></h5>
  </div>
@stop

@section('css')
   
    <!-- Agregar otros enlaces CDN de CSS si es necesario -->
@stop

@section('js')
   
    <!-- Agregar otros enlaces CDN de JavaScript si es necesario -->
@stop

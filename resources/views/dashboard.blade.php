@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@php
    date_default_timezone_set('America/Guatemala');
    $hora_actual = date('G');
    
    if ($hora_actual >= 5 && $hora_actual < 12) {
        $saludo = '¡Buenos Días..!';
    } elseif ($hora_actual >= 12 && $hora_actual < 18) {
        $saludo = '¡Buenas Tardes..!';
    } else {
        $saludo = '¡Buenas Noches..!';
    }
@endphp
@stop

@section('content')
   <div class="card position-relative">
    <img src="https://assets.materialup.com/uploads/cf947cf0-272a-452a-bb93-a8b7b7bdea95/preview.gif" alt="" class="img-fluid">
    <h1 class="position-absolute top-50 start-50 translate-middle mb-0">{{ $saludo }} <b>{{ $user->name }}</b></h1>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <!-- Agregar otros enlaces CDN de CSS si es necesario -->
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
    <!-- Agregar otros enlaces CDN de JavaScript si es necesario -->
@stop

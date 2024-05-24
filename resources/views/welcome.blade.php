@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <div class ="container">
        <div class="row">
            <div class ="col-sm">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>25</h3>
                        <p>Empleados activos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="{{ route('empleados') }}" class="small-box-footer">
                        Mas informacion <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm">
                <div class="small-box bg-info">
                    <div class="inner">
                      <h3>150</h3>
                      <p>solicitudes</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-file"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
            </div>
            <div class="col-sm">
                <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>150</h3>
                      <p>Empleados ausentes</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-user-times"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
            </div>
        </div>
    </div>
@stop

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">CIAF-HR</h4>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop

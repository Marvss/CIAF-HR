@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestion de empleados</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Empleados</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Puesto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>52406</td>
                    <td>Javier</td>
                    <td>javier@gmail.com</td>
                    <td>Vendedor</td>
                    <td>
                        <a href="" class="btn btn-success">Ver</a>
                        <a href="" class="btn btn-primary">Actualizar</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Dar de baja</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{route('addEmpleado') }}" class="btn btn-success">Añadir Empleado</a>
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

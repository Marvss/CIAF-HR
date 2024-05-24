<!-- resources/views/employees/create.blade.php -->
@extends('adminlte::page')

@section('title', 'añadir empleado')

@section('content_header')
    <h1>Añadir empleado</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <select name="position" class="form-control">
                    <option value="manager">Vendedor</option>
                    <option value="developer">Administracion</option>
                    <option value="designer">IT</option>
                    <option value="tester">Tester</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Añadir Empleado</button>
        </form>
    </div>
</div>
@stop

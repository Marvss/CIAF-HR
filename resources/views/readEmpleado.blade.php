@extends('adminlte::page')

@section('title', 'Employee Details')

@section('content_header')
    <h1>Employee Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Employee Card</h3>
        <div class="card-tools">
            <a href="" class="btn btn-primary btn-sm">Edit</a>
            <form action="" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <img src="" class="img-fluid img-thumbnail" alt="Employee Image">
            </div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Position</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Date of Hire</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

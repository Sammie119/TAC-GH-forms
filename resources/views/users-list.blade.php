@extends('layouts.app')

@section('title', 'TAC-forms | Users List')

@section('content')
<div class="container-fluid col-8 px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                Users List
                <a href="/register" class="btn btn-success float-end" style="margin-left: 10px;">Register</a>
            </h4>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('unsuccessful'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('unsuccessful') }}
                </div>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $users)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $users->user_id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td><a href="delete/{{ $users->user_id }}" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection
@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE
                <a href="area-sup-r/{{ $destination }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                {{-- <a href="#" class="btn btn-info float-end">Statistics</a> --}}
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Age</th>
                    <th scope="col">Year of Call</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $data->areasupq_name }}</td>
                            <td>{{ $data->areasupq_dob }}</td>
                            <td>{{ $data->age }}</td>
                            <td>{{ $data->areasupq_year }}</td>
                            <td>{{ $data->user_name }}</td>
                            <td><a href="#/{{ $data->area_sup_id }}" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection
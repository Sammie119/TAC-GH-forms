@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                DISTRICT PASTORS' DIRECT QUESTIONNAIRE
                @if (Auth()->user()->user_role != 0)
                    <a href="dist-past-q/{{ $destination }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                @endif
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
                    @if (Auth()->user()->user_role != 0)
                        <th scope="col">Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $data->pastorques_name }}</td>
                            <td>{{ $data->pastorques_dob }}</td>
                            <td>{{ $data->age }}</td>
                            <td>{{ $data->pastorques_year }}</td>
                            <td>{{ $data->user_name }}</td>
                            @if (Auth()->user()->user_role != 0)
                                <td>
                                    <a href="#/{{ $data->district_pastor_id }}" class="btn btn-success btn-sm" style="text-decoration: none" title="Delete">Edit</a>
                                    @if (Auth()->user()->user_role == 1)
                                        <a href="#/{{ $data->district_pastor_id }}" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a> 
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection
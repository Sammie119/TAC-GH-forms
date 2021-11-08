@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                MONITOR'S REPORT ({{ $destination_name }})
                <a href="moniter-r/{{ $destination }}/{{ $destination_name }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                {{-- <a href="#" class="btn btn-info float-end">Statistics</a> --}}
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Area</th>
                    <th scope="col">District</th>
                    <th scope="col">Local</th>
                    <th scope="col">Interviewee</th>
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $data->area }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->local }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->user_name }}</td>
                            <td><a href="#/{{ $data->monitor_id }}" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection
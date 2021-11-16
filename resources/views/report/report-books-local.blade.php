@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                RECORDING AND BOOK KEEPING - LOCAL REPORT ({{ $area['area'] }})
                @if (Auth()->user()->user_role != 0)
                    <a href="r-booking-local/{{ $destination }}/{{ $area['area'] }}/{{ $area['district'] }}/{{ $area['local'] }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                @endif
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
                    <th scope="col">Prepared by</th>
                    <th scope="col">Year</th>
                    <th scope="col">Period</th>
                    <th scope="col">WP</th>
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
                            <td>{{ $data->area }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->local }}</td>
                            <td>{{ $data->rec_local_prepared_by }}</td>
                            <td>{{ $data->rec_local_year }}</td>
                            <td>{{ $data->rec_local_period }}</td>
                            <td>{{ $data->rec_local_w_p }}</td>
                            <td>{{ $data->user_name }}</td>
                            @if (Auth()->user()->user_role != 0)
                                <td>
                                    <a href="#/{{ $data->record_id }}" class="btn btn-success btn-sm" style="text-decoration: none" title="Delete">Edit</a>
                                    @if (Auth()->user()->user_role == 1)
                                        <a href="#/{{ $data->record_id }}" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a> 
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
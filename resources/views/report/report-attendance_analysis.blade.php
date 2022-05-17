@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container-fluid px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                ATTENDANCE ANALYSIS ({{ $area['area'] }})
                @if (Auth()->user()->user_role != 0)
                    <a href="view-chart/attn_anal/{{ $destination }}/{{ $area['area'] }}/{{ $area['district'] }}/{{ $area['local'] }}" class="btn btn-info float-end" style="margin-left: 10px;">Report</a>
                    <a href="attn_anal/{{ $destination }}/{{ $area['area'] }}/{{ $area['district'] }}/{{ $area['local'] }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                @endif
                {{-- <a href="#" class="btn btn-info float-end">Statistics</a> --}}
            </h4>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Area</th>
                    <th scope="col">District</th>
                    <th scope="col">Local</th>
                    <th scope="col">Status</th>
                    <th scope="col">Username</th>
                    @if (Auth()->user()->user_role != 0)
                        <th scope="col">Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $data)
                        <tr id="sid{{ $data->attendance_id }}">
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $data->area }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->local }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->user_name }}</td>
                            @if (Auth()->user()->user_role != 0)
                                <td>
                                    <a href="edit-form/{{ $data->attendance_id }}/attn_anal" class="btn btn-success btn-sm" style="text-decoration: none" title="Delete">Edit</a>
                                    @if (Auth()->user()->user_role == 1)
                                    <a href="javascript:void(0)"  onclick="deleteRecord({{ $data->attendance_id }}, 'attn_anal')" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a> 
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

<script>
    function deleteRecord(id, form){
        if(confirm('This record will be deleted permanently!!!')){
            $.ajax({
                url: '/delete-form/'+id+'/'+form,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    _token: $("input[name=_token]").val()
                },
                success: function(response){
                    // $("#sid"+id).remove();
                    location.reload(true);
                }
            });
        }
    }
</script>
    
@endsection
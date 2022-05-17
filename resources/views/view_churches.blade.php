@extends('layouts.app')

@section('title', 'TAC-forms | Areas')

@section('content')
<div class="container-fluid col-8 px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                Areas/Districts/Locals
                <a href="/add_church" class="btn btn-success float-end" style="margin-left: 10px;">Add Church</a>
                <input type="search" id="search" placeholder="Search..." aria-label="Search" class="form-control float-end" style="width: 30%;" autofocus>
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
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="employee_table">
                    @foreach ($churches as $key => $church)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $church->dropdown_name }}</td>
                            <td>
                                @if ($church->status == 1)
                                   Area 
                                @elseif ($church->status == 2)
                                    District
                                @elseif ($church->status == 3)
                                    Local
                                @endif
                            </td>
                            <td>
                                <a href="edit_church/{{ $church->id }}" class="btn btn-success btn-sm" style="text-decoration: none" title="Edit">Edit</a>
                                
                                <a href="delete_church/{{ $church->id }}" onclick="return confirm('{{ $church->dropdown_name }} will be deleted permanently!!!')" class="btn btn-danger btn-sm" style="text-decoration: none" title="Delete">Delete</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
        $('#search').focus();

        // Table filter
        $('#search').keyup(function(){  
            search_table($(this).val());  
        });  
        function search_table(value){  
            $('#employee_table tr').each(function(){  
                var found = 'false';  
                $(this).each(function(){  
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){  
                        found = 'true';  
                    }  
                });  
                if(found == 'true'){  
                    $(this).show();  
                }  
                else{  
                    $(this).hide();  
                }  
            });  
        }

    };
    
  </script>
    
@endsection
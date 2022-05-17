@extends('layouts.app')

@section('title', 'TAC-forms | Add Church')

<style>
    input[type='text'], input[type='email'], input[type='password'], select {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #000 !important
    }

    .mb {
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: bold;
    }

</style>

@section('content')
    <div class="container d-flex justify-content-center mt-4">
        <div class="card text-dark bg-light mb-3 col-7">
            <div class="card-header"><h2>
                @if (isset($church->id))
                    Edit Church
                @else
                    Add Church
                @endif
                
                <a href="/churches" class="btn btn-success float-end" style="margin-left: 10px;">Churches</a>
                </h2>
            </div>
            <div class="card-body">
                <form action="{{ route('add_church_store') }}" method="POST">
                    @csrf
                    @isset($church->id)
                        <input type="hidden" name="id" value="{{ $church->id }}">
                    @endisset
                    <div class="row mb-4">
                        <div class="col-sm-12"> <input name="name" placeholder="Enter of Church" value="{{ (isset($church->id)) ? $church->dropdown_name : '' }}" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        @if ($errors->has('name'))
                            <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                        @endif 
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12"> 
                            <select name="category" id="category" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                @if (isset($church->id))
                                    <option value="{{ $church->status }}" selected>
                                        @if ($church->status == 1)
                                            Area
                                        @elseif ($church->status == 2)
                                            District
                                        @else
                                            Local
                                        @endif
                                    </option>
                                @else
                                    <option value="" disabled selected>Select Category</option>
                                @endif
                                <option value="1">Area</option>
                                <option value="2">District</option>
                                <option value="3">Local</option>
                            </select>
                            @if ($errors->has('category'))
                                <span class="error" style="color: red">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
    </div>
    <script type="text/javascript">
        window.onload = function(){
            document.getElementById('date-picker-example').focus();

            // $('#user_role').on('change',function(){  
            //     if(document.getElementById('user_role').value == '3' ){
            //         document.getElementById('forms-filler').style.display='block';
            //     }else{
            //         document.getElementById('forms-filler').style.display='none';
            //     }
                
            // });

        };
    </script>
    
@endsection
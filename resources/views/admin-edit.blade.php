@extends('layouts.app')

@section('title', 'TAC-forms | Admin Edit User')

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
        <div class="card text-dark bg-light mb-3 col-6">
            <div class="card-header"><h2>Edit User
                <a href="/user-list" class="btn btn-success float-end" style="margin-left: 10px;">Users</a>
                </h2>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('admin-update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->user_id }}">
                    <div class="row mb-4">
                        <div class="col-sm-12"> <input name="name" value="{{ $user->name }}" readonly placeholder="Enter Name" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        @if ($errors->has('name'))
                            <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                        @endif 
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-8"> 
                            <input name="email" readonly placeholder="Enter Email" type="email" value="{{ $user->email }}" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            @if ($errors->has('email'))
                                <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4"> 
                            <select name="user_role" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                @php
                                    if($user->user_role == 2 ){
                                        $role = 'Admin';
                                    }elseif ($user->user_role == 0) {
                                        $role = 'User';
                                    }
                                    elseif ($user->user_role == 3){
                                        $role = 'Form Filler';
                                    }
                                @endphp
                                <option value="{{ $user->user_role }}">{{ $role }}</option>
                                <option value="2">Admin</option>
                                <option value="0">User</option>
                                <option value="3">Form Filler</option>
                            </select>
                            @if ($errors->has('user_role'))
                                <span class="error" style="color: red">{{ $errors->first('user_role') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-6"> 
                            <input name="password" readonly value="12345678" placeholder="Password" type="password" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            @if ($errors->has('password'))
                                <span class="error" style="color: red">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6"> 
                            <input name="confirm_password" readonly value="12345678" placeholder="Confirm Password" type="password" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            @if ($errors->has('confirm_password'))
                                <span class="error" style="color: red">{{ $errors->first('confirm_password') }}</span>
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
    
@endsection
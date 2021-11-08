@extends('layouts.app')

@section('title', 'TAC-forms | User Profile')

<style>
    input[type='text'], input[type='email'], input[type='password'] {
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
    <div class="container d-flex justify-content-center">
        <div class="card text-dark bg-light mb-3 col-6" style="margin-top: 100px;">
            <div class="card-header"><h2>User Profile</h2></div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('post-profile') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-sm-12"> <input name="name" value="{{ $user->name }}" required placeholder="Enter Name" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome" readonly> </div>
                        @if ($errors->has('name'))
                            <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                        @endif 
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12"> <input name="email" value="{{ $user->email }}" required placeholder="Enter Email" type="email" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        @if ($errors->has('email'))
                            <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-6"> 
                            <input name="password" required placeholder="Password" type="password" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            @if ($errors->has('password'))
                                <span class="error" style="color: red">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-6"> 
                            <input name="confirm_password" required placeholder="Confirm Password" type="password" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
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
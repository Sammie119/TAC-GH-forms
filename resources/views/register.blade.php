@extends('layouts.app')

@section('title', 'TAC-forms | Register')

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
            <div class="card-header"><h2>Register
                <a href="/user-list" class="btn btn-success float-end" style="margin-left: 10px;">Users</a>
                </h2>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('registration') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-sm-12"> <input name="name" required placeholder="Enter Name" value="{{ old('name') }}" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        @if ($errors->has('name'))
                            <span class="error" style="color: red">{{ $errors->first('name') }}</span>
                        @endif 
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-8"> 
                            <input name="email" required placeholder="Enter Email" type="email" value="{{ old('email') }}" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            @if ($errors->has('email'))
                                <span class="error" style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-sm-4"> 
                            <select name="user_role" required id="user_role" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                <option value="" disabled selected>Select User Role</option>
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
                    <div class="row ml-2" style="display: none" id="forms-filler">
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form1" value="1" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Area Heads Visitation Report</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form2" value="1" role="switch" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Area Sup Questionnaire</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form3" value="1" role="switch" id="flexSwitchCheckDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Community Impression Report</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form4" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">District Level Monitoring</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form5" value="1" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Dist Pastors Questionnaire</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form6" value="1" role="switch" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">District Pastor Visitation Rep</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form7" value="1" role="switch" id="flexSwitchCheckDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Local Evangelism</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form8" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Local Level Monitoring</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form18" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Presiding Elder's Assessment</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form20" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Growth Assessment</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form21" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Attendance Analysis</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form9" value="1" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Members Report</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form10" value="1" role="switch" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Monitors Opinion</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form11" value="1" role="switch" id="flexSwitchCheckDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Pastors Assessment Questionnaire</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form12" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Sup Assessment Questionnaire</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form13" value="1" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Financial Policy</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form14" value="1" role="switch" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Procurement Policy</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form15" value="1" role="switch" id="flexSwitchCheckDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Records Keeping - Area</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox"name="form16" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Records Keeping - District</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox"name="form17" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Records Keeping - Local</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form19" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Growth Quenstionnaire</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" name="form22" value="1" role="switch" id="flexSwitchCheckCheckedDisabled">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Financial Assessment</label>
                                    </div>
                                </td>
                            </tr>
                        </table>
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

            $('#user_role').on('change',function(){  
                if(document.getElementById('user_role').value == '3' ){
                    document.getElementById('forms-filler').style.display='block';
                }else{
                    document.getElementById('forms-filler').style.display='none';
                }
                
            });

        };
    </script>
    
@endsection
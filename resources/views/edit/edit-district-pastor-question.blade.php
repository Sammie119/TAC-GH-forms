@extends('layouts.app')

@section('title', 'TAC-forms | Edit Form')

<style>
    input[type='text'], input[type='email'], input[type='number'], input[type='date'], textarea, select {
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
    <div class="container-fluid mt-4 px-4">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header"><h3>EDIT - {{ $form }}</h3></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        <div class="card text-dark bg-light mb-3 col-8">
                            {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTORS' DIRECT QUESTIONNAIRE</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('district-past-question') }}" id="pastorquesonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->district_pastor_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="pastorques_name" value="{{ $data->pastorques_name }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Pastor</small>
                                        </div>
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <input name="pastorques_dob" value="{{ $data->pastorques_dob }}" required placeholder="Date of Birth" max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Date of Birth</small>
                                        </div>
                                        <div class="col-sm-3"> 
                                            <input name="pastorques_year" value="{{ $data->pastorques_year }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Year of Call</small>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <input name="pastorques_stay_length" value="{{ $data->pastorques_stay_length }}" required title="Length of Stay at Current Station" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Length of Stay at Current Station</small>
                                        </div>
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <select name="pastorques_wife" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                <option value="{{ $data->pastorques_wife }}">{{ $data->pastorques_wife }}</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <small>Is your wife with you at Station?</small>
                                        </div>
                                        <div class="col-sm-2 mb-4" style="text-align: center"> 
                                            <input name="pastorques_children" value="{{ $data->pastorques_children }}" required title="Number of Children" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Number of Children</small>
                                        </div>
                                        <div class="col-sm-2" style="text-align: center"> 
                                            <input name="pastorques_child_age" value="{{ $data->pastorques_child_age }}" required title="Age of last Child" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Age of last Child</small>
                                        </div>
                                        <div class="col-sm-2" style="text-align: center"> 
                                            <input name="pastorques_child_station" value="{{ $data->pastorques_child_station }}" required title="How many of your children are with you at your station" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>How many of your children are with you at your station</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How have you been received by the officers of the church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How have you been received by the members of the church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What is your assessment of the progress of the work so far?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any ongoing projects? Please briefly describe them and indicate their state of progress.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you encountering any difficulties in your station? Please describe them. </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment6 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any challenges that need General HQ attention? Please state them.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you receiving encouragement and guidance from the Area Superintendent?  You may give details in if any.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What challenges do you see in the Area?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How often does the Area Superintendent visit your District?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment10 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How frequent are the Area Pastorate meetings?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment11" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment11 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Is there an ongoing Area project you are aware of?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment12" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment12 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How frequent are Area programmes?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment13" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment13 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there ongoing capacity building programmes at the Area level?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment14" rows="2" placeholder="Details/Comments if any...">{{ $data->pastorques_comment14 }}</textarea>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <input name="pastorques_name_dist" value="{{ $data->pastorques_name_dist }}" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District Pastor</small>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
    </div>
    
@endsection
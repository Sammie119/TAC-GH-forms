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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('area-sup-question') }}" id="areasupqonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->area_sup_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="areasupq_name" value="{{ $data->areasupq_name }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area Superintendent</small>
                                        </div>
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <input name="areasupq_dob" value="{{ $data->areasupq_dob }}" required max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Date of Birth</small>
                                        </div>
                                        <div class="col-sm-3 mb-4"> 
                                            <input name="areasupq_year" value="{{ $data->areasupq_year }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Year of Call</small>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <input name="areasupq_date_of_report" value="{{ $data->areasupq_date_of_report }}" required placeholder="Date of Birth" max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small>Date of reporitng at Current Station</small>
                                        </div>
                                        <div class="col-sm-3" style="text-align: center"> 
                                            <select name="areasupq_wife" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                <option value="{{ $data->areasupq_wife }}">{{ $data->areasupq_wife }}</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <small>Is your wife with you at Station?</small>
                                        </div>
                                        <div class="col-sm-3 mb-4"> 
                                            <input name="areasupq_children" value="{{ $data->areasupq_children }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Number of Children</small>
                                        </div>
                                        <div class="col-sm-3"> 
                                            <input name="areasupq_child_age" value="{{ $data->areasupq_child_age }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Age of last Child</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you compare current membership against membership at your resumption of duty</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How have you been received by the officers of the church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How have you been received by the members of the church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What is your assessment of the progress of the work of ministry so far?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any ongoing projects? Please briefly describe them and indicate their state of progress.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you encountering any difficulties in your station? Please describe them. </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment6 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How are you addressing these difficulties in your Districts/Area Level?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What Challenges are you facing for which you will need Head Office support.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are your District Pastors cooperating with you?  You may give details if any.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areasupqonitor" class="form-control" name="areasupq_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->areasupq_comment9 }}</textarea>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="row">
                                        <div class="col-sm-12"> <input name="areasupq_name_sup" value="{{ $data->areasupq_name_sup }}" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                                        <small class="d-flex justify-content-center">Name of Area Superintendent</small>
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
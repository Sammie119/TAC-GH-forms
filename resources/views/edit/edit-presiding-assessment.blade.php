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
@include('edit.datalist')
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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>PRESIDING ELDER'S ASSESSMENT QUESTIONNAIRE</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('presidingassesstment') }}" id="pres_assonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->presiding_id }}">
                                    <div class="row">
                                        <div class="col-sm-6"> 
                                            <input name="pres_ass_district" value="{{ $data->pres_ass_district }}" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                                            <small class="d-flex justify-content-center">Name of District</small> 
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="pres_ass_area" value="{{ $data->pres_ass_area }}" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                                            <small class="d-flex justify-content-center">Name of Area</small> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"> 
                                            <input name="pres_ass_local" value="{{ $data->pres_ass_local }}" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="pres_ass_name" value="{{ $data->pres_ass_name }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Name</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">When did he become your Presiding Elder? How have you received him?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty of your Presiding Elder?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What is your assessment of the progress of work so far towards overall church growth?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any ongoing projects? Please describe them and indicate their state of progress.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you aware of any difficulties of your Presiding Elder? Please describe them.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any challenges of the assembly that need General HQ attention? Please state them.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment6 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you receiving encouragement and guidance from your Presiding Elder? You may give details in if any.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How frequent is the Area Superintendent visit to your assembly?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Have you ever spoken with your Presiding Elder?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What is your recommendation about your Presiding Elder?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment10 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How frequent are District programmes? Have you ever attended any? If yes, describe the programme.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment11" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment11 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are the ongoing capacity building programmes in the assembly?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="pres_assonitor" class="form-control" name="pres_ass_comment12" rows="2" placeholder="Details/Comments if any...">{{ $data->pres_ass_comment12 }}</textarea>
                                            </div>
                                        </li>
                                    </ol>
                                    
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
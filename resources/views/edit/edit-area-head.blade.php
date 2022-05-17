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
                            {{-- <div class="card-header d-flex justify-content-center"><h4></h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('area-head') }}" method="POST" id="areaheadonitor">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->area_head_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="areahead_district" value="{{ $data->areahead_district }}" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="areahead_area" value="{{ $data->areahead_area }}" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="areahead_local" value="{{ $data->areahead_local }}" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="areahead_status" value="{{ $data->areahead_status }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">List the Districts in the Area and indicate the number of Assemblies in each District</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment1" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Provide the names of all the Pastors in the Area</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment2" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Provide the names of Locals you have visited in the last three months</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment3" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Give the name of the Local for which this is being answered</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What was your main assignment for the day? (Regular Ministration, Funeral Service, Ordination Service, Wedding etc)</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Were there any prophecies during the service? If so, please give a brief summary of the prophecies.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment6" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment6 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Quality of the Church Service. How would you rate each of these components of the service?</label>
                                            </div>
                                            <ol type = "a">
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Praise and Worship</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="areahead_question7" value="Very Good" <?php if ($data->areahead_question7 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question7" value="Good" <?php if ($data->areahead_question7 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question7" value="Average" <?php if ($data->areahead_question7 == 'Average') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question7" value="Poor" <?php if ($data->areahead_question7 == 'Poor') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question7" value="Very Poor" <?php if ($data->areahead_question7 == 'Very Poor') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Word Ministration</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="areahead_question8" value="Very Good" <?php if ($data->areahead_question8 == 'Very Good') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question8" value="Good" <?php if ($data->areahead_question8 == 'Good') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question8" value="Average" <?php if ($data->areahead_question8 == 'Average') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question8" value="Poor" <?php if ($data->areahead_question8 == 'Poor') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question8" value="Very Poor" <?php if ($data->areahead_question8 == 'Very Poor') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Order and Decency</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="areahead_question9" value="Very Good" <?php if ($data->areahead_question9 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question9" value="Good" <?php if ($data->areahead_question9 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question9" value="Average" <?php if ($data->areahead_question9 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question9" value="Poor" <?php if ($data->areahead_question9 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question9" value="Very Poor" <?php if ($data->areahead_question9 == 'Very Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Prayer Session</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="areahead_question10" value="Very Good" <?php if ($data->areahead_question10 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question10" value="Good" <?php if ($data->areahead_question10 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question10" value="Average" <?php if ($data->areahead_question10 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question10" value="Poor" <?php if ($data->areahead_question10 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question10" value="Very Poor" <?php if ($data->areahead_question10 == 'Very Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Tithes/Offerings</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="areahead_question11" value="Very Good" <?php if ($data->areahead_question11 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question11" value="Good" <?php if ($data->areahead_question11 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question11" value="Average" <?php if ($data->areahead_question11 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question11" value="Poor" <?php if ($data->areahead_question11 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="areahead_question11" value="Very Poor" <?php if ($data->areahead_question11 == 'Very Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Your assesment of the congregations' receptiveness to the word ministration</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="areahead_question12" value="Very Good" <?php if ($data->areahead_question12 == 'Very Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question12" value="Good" <?php if ($data->areahead_question12 == 'Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question12" value="Average" <?php if ($data->areahead_question12 == 'Average') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question12" value="Poor" <?php if ($data->areahead_question12 == 'Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Poor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question12" value="Very Poor" <?php if ($data->areahead_question12 == 'Very Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Poor
                                                </label>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">The cleanliness and arrangement of the Place of Worship; 
                                                    <br> The state/condition of the place of worship</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="areahead_question13" value="Very Good" <?php if ($data->areahead_question13 == 'Very Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question13" value="Good" <?php if ($data->areahead_question13 == 'Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question13" value="Average" <?php if ($data->areahead_question13 == 'Average') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question13" value="Poor" <?php if ($data->areahead_question13 == 'Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Poor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question13" value="Very Poor" <?php if ($data->areahead_question13 == 'Very Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Poor
                                                </label>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Has the Church purchased/own land? 
                                                    <br> (If Yes, indicate the number of plots) </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="areahead_question14" value="Yes" <?php if ($data->areahead_question14 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question14" value="No" <?php if ($data->areahead_question14 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question14" value="Somehow" <?php if ($data->areahead_question14 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment14" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment14 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Indicate whether the Church land is registered or unregistered?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="areahead_question15" value="Yes" <?php if ($data->areahead_question15 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question15" value="No" <?php if ($data->areahead_question15 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question15" value="Somehow" <?php if ($data->areahead_question15 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment15" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment15 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Indicate the nature of the place of Worship. (Classroom, Shed, Residential Property, Uncompleted, Completed etc)</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment16" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment16 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there signboards directing people to the place of worship?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="areahead_question17" value="Yes" <?php if ($data->areahead_question17 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question17" value="No" <?php if ($data->areahead_question17 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="areahead_question17" value="Somehow" <?php if ($data->areahead_question17 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment17" rows="2" placeholder="Details/Comments if any...">{{ $data->areahead_comment17 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any praise reports for this local assembly? Please share.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment18" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment18 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any issues that will require General Headquarters attention?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment19" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment19 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are your general impressions of and comments on the local church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment20" rows="3" placeholder="Details/Comments if any...">{{ $data->areahead_comment20 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Did you meet any areaheads that you believe have potential for ascension ministry or any other ministry that requires training and development? Please list them and their potential ministries.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="areaheadonitor" class="form-control" name="areahead_comment21" rows="4" placeholder="Details/Comments if any...">{{ $data->areahead_comment21 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <hr>
                                            <div>
                                                
                                            </div>
                                        <h3>Statistics for the Day</h3>
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Attendance Report</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="areahead_pastors" value="{{ $data->areahead_pastors }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Pastors</small>
                                                </div>
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_elders" value="{{ $data->areahead_elders }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Elders</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="areahead_deacons" value="{{ $data->areahead_deacons }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deacons</small>
                                                </div>
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_deaconesses" value="{{ $data->areahead_deaconesses }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deaconesses</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_adult_males" value="{{ $data->areahead_adult_males }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Males</small>
                                                </div>
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_adult_females" value="{{ $data->areahead_adult_females }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Females</small>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_children" value="{{ $data->areahead_children }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Children</small>
                                                </div>
                                                <div class="col-sm-4  mb-4"> 
                                                    <input name="areahead_youth" value="{{ $data->areahead_youth }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Youth</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> 
                                                    <input name="areahead_total_att" value="{{ $data->areahead_total_att }}" required placeholder="" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Total Attendance for the day</small>
                                                </div>
                                                
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Finance Report</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="areahead_tithe_payers" value="{{ $data->areahead_tithe_payers }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of Tithe Payers for the day</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="areahead_active_tithe_payers" value="{{ $data->areahead_active_tithe_payers }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of active tithe payers</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="areahead_tithes_paid" value="{{ $data->areahead_tithes_paid }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Amount of Tithes paid</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="areahead_oferring" value="{{ $data->areahead_oferring }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Thanksgiving Offering</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="areahead_any_oferring" value="{{ $data->areahead_any_oferring }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Any other offering</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> 
                                                    <input name="areahead_total_tithe_off" value="{{ $data->areahead_total_tithe_off }}" required placeholder="" type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Total Tithes and Thanksgiving Offering</small>
                                                </div>
                                            </div>
                                        </li>
                    
                                        <div class="row mt-4">
                                            <div class="col-sm-6"> 
                                                <input name="areahead_apostle" value="{{ $data->areahead_apostle }}" required placeholder="" type="text" id="date-picker-example" class="form-control datep" style="font-family:Arial, FontAwesome"> 
                                                <small class="d-flex justify-content-center">Name of Area Superintendent</small>
                                            </div>
                                            <div class="col-sm-6"> 
                                                <input name="areahead_pastor" value="{{ $data->areahead_pastor }}" required placeholder="" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                <small class="d-flex justify-content-center">Name of Presiding Elder / Pastor</small>
                                            </div>
                                        </div>
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
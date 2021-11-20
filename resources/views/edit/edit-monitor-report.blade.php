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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>MONITOR'S  REPORT</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('monitor-report') }}" id="monireponitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->monitor_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="monirep_district" value="{{ $data->monirep_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="monirep_area" value="{{ $data->monirep_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="monirep_local" value="{{ $data->monirep_local }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="monirep_status" value="{{ $data->monirep_status }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you describe the quality of the church environment in terms of cleanliness?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="monirep_question1" value="Yes" <?php if ($data->monirep_question1 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question1" value="No" <?php if ($data->monirep_question1 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question1" value="Somehow" <?php if ($data->monirep_question1 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Is there a service for children and youth?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="monirep_question2" value="Yes" <?php if ($data->monirep_question2 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question2" value="No" <?php if ($data->monirep_question2 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question2" value="Somehow" <?php if ($data->monirep_question2 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you describe the place of meeting for the Children and Youth?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you describe the quality of the services for the Children and Youth?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are members coming to church services early enough?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="monirep_question5" value="Yes" <?php if ($data->monirep_question5 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question5" value="No" <?php if ($data->monirep_question5 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question5" value="Somehow" <?php if ($data->monirep_question5 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do late comers exhbit a sense of urgency in coming to church?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="monirep_question6" value="Yes" <?php if ($data->monirep_question6 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question6" value="No" <?php if ($data->monirep_question6 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="monirep_question6" value="Somehow" <?php if ($data->monirep_question6 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment6 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How would you rate each of these components of the service? Give your brief comments.</label>
                                            </div>
                                            <ol type = "a">
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Praise and Worship</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="monirep_question7" value="Very Good" <?php if ($data->monirep_question7 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question7" value="Good" <?php if ($data->monirep_question7 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question7" value="Average" <?php if ($data->monirep_question7 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question7" value="Poor" <?php if ($data->monirep_question7 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question7" value="Very Poor" <?php if ($data->monirep_question7 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="monirep_question8" value="Very Good" <?php if ($data->monirep_question8 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question8" value="Good" <?php if ($data->monirep_question8 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question8" value="Average" <?php if ($data->monirep_question8 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question8" value="Poor" <?php if ($data->monirep_question8 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question8" value="Very Poor" <?php if ($data->monirep_question8 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="monirep_question9" value="Very Good" <?php if ($data->monirep_question9 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question9" value="Good" <?php if ($data->monirep_question9 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question9" value="Average" <?php if ($data->monirep_question9 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question9" value="Poor" <?php if ($data->monirep_question9 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question9" value="Very Poor" <?php if ($data->monirep_question9 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="monirep_question10" value="Very Good" <?php if ($data->monirep_question10 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question10" value="Good" <?php if ($data->monirep_question10 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question10" value="Average" <?php if ($data->monirep_question10 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question10" value="Poor" <?php if ($data->monirep_question10 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question10" value="Very Poor" <?php if ($data->monirep_question10 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="monirep_question11" value="Very Good" <?php if ($data->monirep_question11 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question11" value="Good" <?php if ($data->monirep_question11 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question11" value="Average" <?php if ($data->monirep_question11 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question11" value="Poor" <?php if ($data->monirep_question11 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question11" value="Very Poor" <?php if ($data->monirep_question11 == 'Very Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">The environment and status of the place of Worship (whether permanent and completed temple, classroom, shed, private residence, etc)</label>
                                            </div>
                                            <ol type = "a">
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Signboards leading to the venue?</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="monirep_question12" value="Very Good" <?php if ($data->monirep_question12 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question12" value="Good" <?php if ($data->monirep_question12 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question12" value="Average" <?php if ($data->monirep_question12 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question12" value="Poor" <?php if ($data->monirep_question12 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="monirep_question12" value="Very Poor" <?php if ($data->monirep_question12 == 'Very Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Poor
                                                        </label>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">What is the nature of the worship center?</label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="monireponitor" class="form-control" name="monirep_comment13" rows="2" placeholder="Details/Comments if any...">{{ $data->monirep_comment13 }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are your general impressions of and comments on the operations of the local church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="monireponitor" class="form-control" name="monirep_comment14" rows="3" placeholder="Details/Comments if any...">{{ $data->monirep_comment14 }}</textarea>
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
                                                    <input name="monirep_pastors" value="{{ $data->monirep_pastors }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Pastors</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="monirep_elders" value="{{ $data->monirep_elders }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Elders</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="monirep_deacons" value="{{ $data->monirep_deacons }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deacons</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="monirep_deaconesses" value="{{ $data->monirep_deaconesses }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deaconesses</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="monirep_adult_males" value="{{ $data->monirep_adult_males }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Males</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="monirep_adult_females" value="{{ $data->monirep_adult_females }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Females</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="monirep_children" value="{{ $data->monirep_children }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Children</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="monirep_youth" value="{{ $data->monirep_youth }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Youth</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="monirep_total_att" value="{{ $data->monirep_total_att }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
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
                                                    <input name="monirep_tithe_payers" value="{{ $data->monirep_tithe_payers }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of Tithe Payers for the day</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="monirep_tithes_paid" value="{{ $data->monirep_tithes_paid }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Amount of Tithes paid</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="monirep_oferring" value="{{ $data->monirep_oferring }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Thanksgiving Offering</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="monirep_total_tithe_off" value="{{ $data->monirep_total_tithe_off }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Total Tithes and Thanksgiving Offering</small>
                                                </div>
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
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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTOR'S VISITATION REPORT</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('district-past-report') }}" id="distpastonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->district_pastor_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="distpast_district" value="{{ $data->distpast_district }}" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="distpast_area" value="{{ $data->distpast_area }}" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="distpast_local" value="{{ $data->distpast_local }}" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="distpast_status" value="{{ $data->distpast_status }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">List the Locals in the District</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment1" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Provide the names of all the Presiding Elders/Officers in the District</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment2" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Which Local have you visited most recently</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What was your main assignment for the visit? (Regular Ministration, Funeral Service, Ordination Service etc)</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Were there any prophecies during the service? If so, please give a brief highlight of the prophecies.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment5" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment5 }}</textarea>
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
                                                        <input class="form-check-input" type="radio" required name="distpast_question6" value="Very Good" <?php if ($data->distpast_question6 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question6" value="Good" <?php if ($data->distpast_question6 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question6" value="Average" <?php if ($data->distpast_question6 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question6" value="Poor" <?php if ($data->distpast_question6 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question6" value="Very Poor" <?php if ($data->distpast_question6 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="distpast_question7" value="Very Good" <?php if ($data->distpast_question7 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question7" value="Good" <?php if ($data->distpast_question7 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question7" value="Average" <?php if ($data->distpast_question7 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question7" value="Poor" <?php if ($data->distpast_question7 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question7" value="Very Poor" <?php if ($data->distpast_question7 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="distpast_question8" value="Very Good" <?php if ($data->distpast_question8 == 'Very Good') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question8" value="Good" <?php if ($data->distpast_question8 == 'Good') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question8" value="Average" <?php if ($data->distpast_question8 == 'Average') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question8" value="Poor" <?php if ($data->distpast_question8 == 'Poor') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question8" value="Very Poor" <?php if ($data->distpast_question8 == 'Very Poor') echo "checked";?>>
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
                                                        <input class="form-check-input" type="radio" required name="distpast_question9" value="Very Good" <?php if ($data->distpast_question9 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question9" value="Good" <?php if ($data->distpast_question9 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question9" value="Average" <?php if ($data->distpast_question9 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question9" value="Poor" <?php if ($data->distpast_question9 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question9" value="Very Poor" <?php if ($data->distpast_question9 == 'Very Poor') echo "checked";?> >
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
                                                        <input class="form-check-input" type="radio" required name="distpast_question10" value="Very Good" <?php if ($data->distpast_question10 == 'Very Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Very Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question10" value="Good" <?php if ($data->distpast_question10 == 'Good') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Good
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question10" value="Average" <?php if ($data->distpast_question10 == 'Average') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Average
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question10" value="Poor" <?php if ($data->distpast_question10 == 'Poor') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Poor
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="distpast_question10" value="Very Poor" <?php if ($data->distpast_question10 == 'Very Poor') echo "checked";?> >
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
                                                <input class="form-check-input" type="radio" required name="distpast_question11" value="Very Good" <?php if ($data->distpast_question11 == 'Very Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question11" value="Good" <?php if ($data->distpast_question11 == 'Good') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question11" value="Average" <?php if ($data->distpast_question11 == 'Average') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question11" value="Poor" <?php if ($data->distpast_question11 == 'Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Poor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question11" value="Very Poor" <?php if ($data->distpast_question11 == 'Very Poor') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Poor
                                                </label>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">The cleanliness and arrangement of the Place of Worship</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="distpast_question12" value="Very Good" <?php if ($data->distpast_question12 == 'Very Good') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question12" value="Good" <?php if ($data->distpast_question12 == 'Good') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Good
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question12" value="Average" <?php if ($data->distpast_question12 == 'Average') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Average
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question12" value="Poor" <?php if ($data->distpast_question12 == 'Poor') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Poor
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question12" value="Very Poor" <?php if ($data->distpast_question12 == 'Very Poor') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Poor
                                                </label>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Are there signboards directing people to the places of worship?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="distpast_question13" value="Yes" <?php if ($data->distpast_question13 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question13" value="No" <?php if ($data->distpast_question13 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="distpast_question13" value="Somehow" <?php if ($data->distpast_question13 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment13" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment13 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Are there any praise reports for this local assembly? Please share.</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment14" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment14 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any issues that will require General Headquarters attention?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment15" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment15 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are your general impressions of and comments on the local church?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment16" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment16 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What methods do you have for Evangelism / Soul Winning</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment17" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment17 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How regularly is Evangelism Done</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment18" rows="2" placeholder="Details/Comments if any...">{{ $data->distpast_comment18 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do you have an on going Discipleship/ New Convert classes?</label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment19" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment19 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are the existing structures for raising leaders </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="distpastonitor" class="form-control" name="distpast_comment20" rows="3" placeholder="Details/Comments if any...">{{ $data->distpast_comment20 }}</textarea>
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
                                                    <input name="distpast_pastors" value="{{ $data->distpast_pastors }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Pastors</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="distpast_elders" value="{{ $data->distpast_elders }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Elders</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="distpast_deacons" value="{{ $data->distpast_deacons }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deacons</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="distpast_deaconesses" value="{{ $data->distpast_deaconesses }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Deaconesses</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="distpast_adult_males" value="{{ $data->distpast_adult_males }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Males</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="distpast_adult_females" value="{{ $data->distpast_adult_females }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Adult Females</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 mb-4"> 
                                                    <input name="distpast_children" value="{{ $data->distpast_children }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Children</small>
                                                </div>
                                                <div class="col-sm-4"> 
                                                    <input name="distpast_youth" value="{{ $data->distpast_youth }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Youth</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> 
                                                    <input name="distpast_total_att" value="{{ $data->distpast_total_att }}" required type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
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
                                                    <input name="distpast_tithe_payers" value="{{ $data->distpast_tithe_payers }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of Tithe Payers for the day</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_active_tithe_payers" value="{{ $data->distpast_active_tithe_payers }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of active tithe payers</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_officers_tithe_payers" value="{{ $data->distpast_officers_tithe_payers }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Number of officers paying tithe</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_tithes_paid" value="{{ $data->distpast_tithes_paid }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Amount of Tithes paid</small>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_oferring" value="{{ $data->distpast_oferring }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Thanksgiving Offering</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_any_oferring" value="{{ $data->distpast_any_oferring }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Any other offering</small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 mb-4"> 
                                                    <input name="distpast_total_tithe_off" value="{{ $data->distpast_total_tithe_off }}" required type="number" step="0.01" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                    <small class="d-flex justify-content-center">Total Tithes and Thanksgiving Offering</small>
                                                </div>
                                            </div>
                                        </li>
                    
                                        <div class="row">
                                            <div class="col-sm-6"> 
                                                <input name="distpast_pastor" value="{{ $data->distpast_pastor }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                <small class="d-flex justify-content-center">Name of District Pastor</small>
                                            </div>
                                            <div class="col-sm-6"> 
                                                <input name="distpast_p_elder" value="{{ $data->distpast_p_elder }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                                <small class="d-flex justify-content-center">Name of Presiding Elder / Local Pastor</small>
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
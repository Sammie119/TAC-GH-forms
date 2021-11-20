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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT OFFICERS LEVEL QUESTIONNAIRE</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('district-level') }}" id="dlmonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->district_level_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="dlm_district" value="{{ $data->dlm_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="dlm_area" value="{{ $data->dlm_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="dlm_local" value="{{ $data->dlm_local }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="dlm_status" value="{{ $data->dlm_status }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Does the District leadership raise funds as prescribed by the Headquaters?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question1" value="Yes" <?php if ($data->dlm_question1 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question1" value="No" <?php if ($data->dlm_question1 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question1" value="Somehow" <?php if ($data->dlm_question1 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do District Church Services last within the average two and half  hour service duration?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question2" value="Yes" <?php if ($data->dlm_question2 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question2" value="No" <?php if ($data->dlm_question2 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question2" value="Somehow" <?php if ($data->dlm_question2 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are district prayer meetings decent and devoid of unscriptural practices?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question3" value="Yes" <?php if ($data->dlm_question3 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question3" value="No" <?php if ($data->dlm_question3 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question3" value="Somehow" <?php if ($data->dlm_question3 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do District movement leaders attend District Presbytery meetings?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question4" value="Yes" <?php if ($data->dlm_question4 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question4" value="No" <?php if ($data->dlm_question4 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question4" value="Somehow" <?php if ($data->dlm_question4 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are Children and Youth ministries encouraged and flourishing?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question5" value="Yes" <?php if ($data->dlm_question5 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question5" value="No" <?php if ($data->dlm_question5 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question5" value="Somehow" <?php if ($data->dlm_question5 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Is the District leadership recognising and encouraging Women in Ministry?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question6" value="Yes" <?php if ($data->dlm_question6 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question6" value="No" <?php if ($data->dlm_question6 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question6" value="Somehow" <?php if ($data->dlm_question6 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment6 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do members come to District Meetings with expectation?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question7" value="Yes" <?php if ($data->dlm_question7 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question7" value="No" <?php if ($data->dlm_question7 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question7" value="Somehow" <?php if ($data->dlm_question7 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Is the power of the Holy Spirit present at District services?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question8" value="Yes" <?php if ($data->dlm_question8 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question8" value="No" <?php if ($data->dlm_question8 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question8" value="Somehow" <?php if ($data->dlm_question8 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are members and officers respectful of leadership?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question9" value="Yes" <?php if ($data->dlm_question9 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question9" value="No" <?php if ($data->dlm_question9 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question9" value="Somehow" <?php if ($data->dlm_question9 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are evening services well attended?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question10" value="Yes" <?php if ($data->dlm_question10 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question10" value="No" <?php if ($data->dlm_question10 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question10" value="Somehow" <?php if ($data->dlm_question10 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment10 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are the members and movements over-burdened with appeal for funds?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question11" value="Yes" <?php if ($data->dlm_question11 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question11" value="No" <?php if ($data->dlm_question11 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question11" value="Somehow" <?php if ($data->dlm_question11 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment11" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment11 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are all locals in existence and functioning well?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="dlm_question12" value="Yes" <?php if ($data->dlm_question12 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question12" value="No" <?php if ($data->dlm_question12 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dlm_question12" value="Somehow" <?php if ($data->dlm_question12 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="dlmonitor" class="form-control" name="dlm_comment12" rows="2" placeholder="Details/Comments if any...">{{ $data->dlm_comment12 }}</textarea>
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
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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>COMMUNITY IMPRESSION REPORT</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('community-rep') }}" id="commreponitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->community_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="commrep_district" value="{{ $data->commrep_district }}" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="commrep_area" value="{{ $data->commrep_area }}" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="commrep_local" value="{{ $data->commrep_local }}" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="commrep_status" value="{{ $data->commrep_status }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How long have you lived in this community?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question1" value="0 - 5 years" <?php if ($data->commrep_question1 == '0 - 5 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    0 - 5 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question1" value="6 - 10 years" <?php if ($data->commrep_question1 == '6 - 10 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    6 - 10 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question1" value="11 - 20 years" <?php if ($data->commrep_question1 == '11 - 20 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    11 - 20 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question1" value="above 20 years" <?php if ($data->commrep_question1 == 'above 20 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    above 20 years
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">How long have you known The Apostolic Church-Ghana?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question2" value="0 - 5 years" <?php if ($data->commrep_question2 == '0 - 5 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    0 - 5 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question2" value="6 - 10 years" <?php if ($data->commrep_question2 == '6 - 10 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    6 - 10 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question2" value="11 - 20 years" <?php if ($data->commrep_question2 == '11 - 20 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    11 - 20 years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question2" value="above 20 years" <?php if ($data->commrep_question2 == 'above 20 years') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    above 20 years
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do you know any member(s) of the church?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question3" value="Yes" <?php if ($data->commrep_question3 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question3" value="No" <?php if ($data->commrep_question3 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question3" value="Somehow" <?php if ($data->commrep_question3 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you a friend of any member(s) of the church?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question4" value="Yes" <?php if ($data->commrep_question4 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question4" value="No" <?php if ($data->commrep_question4 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question4" value="Somehow" <?php if ($data->commrep_question4 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Have you ever visited the church before? If yes, what took you there?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question5" value="Yes" <?php if ($data->commrep_question5 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question5" value="No" <?php if ($data->commrep_question5 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question5" value="Somehow" <?php if ($data->commrep_question5 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Has the activities of the church been a bother to you or the community before? If yes, please explain.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question6" value="Yes" <?php if ($data->commrep_question6 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question6" value="No" <?php if ($data->commrep_question6 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question6" value="Somehow" <?php if ($data->commrep_question6 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment6 }}</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Has the church been a blessing to you or the community? If yes, please explain.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question7" value="Yes" <?php if ($data->commrep_question7 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question7" value="No" <?php if ($data->commrep_question7 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question7" value="Somehow" <?php if ($data->commrep_question7 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Has any member ever witnessed to you or invited you to church before?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question8" value="Yes" <?php if ($data->commrep_question8 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question8" value="No" <?php if ($data->commrep_question8 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question8" value="Somehow" <?php if ($data->commrep_question8 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you a Christian? If yes, where do you fellowship?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question9" value="Yes" <?php if ($data->commrep_question9 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question9" value="No" <?php if ($data->commrep_question9 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question9" value="Somehow" <?php if ($data->commrep_question9 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">If you have to choose a new place of worship, would you choose The Apostolic Church (in your community)?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="commrep_question10" value="Yes" <?php if ($data->commrep_question10 == 'Yes') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question10" value="No" <?php if ($data->commrep_question10 == 'No') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="commrep_question10" value="Somehow" <?php if ($data->commrep_question10 == 'Somehow') echo "checked";?>>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->commrep_comment10 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are your general impressions of and comments about The Apostolic Church-Ghana?</label>
                                            </div>
                                            <div class="form-check" style="display: none">
                                                <input class="form-check-input" type="radio" name="commrep_question11" value="Somehow" <?php if ($data->commrep_question11 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="commreponitor" class="form-control" name="commrep_comment11" rows="3" placeholder="Details/Comments if any...">{{ $data->commrep_comment11 }}</textarea>
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
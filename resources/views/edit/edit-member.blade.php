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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>MEMBER QUESTIONNAIRE</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('member-report') }}" id="memberonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->member_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="member_district" value="{{ $data->member_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="member_area" value="{{ $data->member_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="member_local" value="{{ $data->member_local }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local Assembly</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="member_status" value="{{ $data->member_status }}" required placeholder="" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Interviewee Status</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Does the District leadership raise funds as prescribed by the Shift Agenda?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question1" value="Yes" <?php if ($data->member_question1 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question1" value="No" <?php if ($data->member_question1 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question1" value="Somehow" <?php if ($data->member_question1 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do District Church Services stay within the average two and half  hour service duration?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question2" value="Yes" <?php if ($data->member_question2 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question2" value="No" <?php if ($data->member_question2 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question2" value="Somehow" <?php if ($data->member_question2 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are district prayer meetings decent and devoid of unscriptural practices?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question3" value="Yes" <?php if ($data->member_question3 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question3" value="No" <?php if ($data->member_question3 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question3" value="Somehow" <?php if ($data->member_question3 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">When was the last time the Area Superintendent visited your Local church?</label>
                                            </div>
                                            <div class="form-check" style="display: none">
                                                <input class="form-check-input" type="radio" name="member_question4" value="Somehow" <?php if ($data->member_question4 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are the Children and Youth ministries encouraged and flourishing?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question5" value="Yes" <?php if ($data->member_question5 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question5" value="No" <?php if ($data->member_question5 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question5" value="Somehow" <?php if ($data->member_question5 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Is the District leadership recognising and encouraging Women in Ministry?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question6" value="Yes" <?php if ($data->member_question6 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question6" value="No" <?php if ($data->member_question6 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question6" value="Somehow" <?php if ($data->member_question6 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment6 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you encouraged to do personal Evangelism?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question7" value="Yes" <?php if ($data->member_question7 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question7" value="No" <?php if ($data->member_question7 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question7" value="Somehow" <?php if ($data->member_question7 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are you aware of any ongoing Discipleship or New Convert classes in your local or at the District level?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question8" value="Yes" <?php if ($data->member_question8 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question8" value="No" <?php if ($data->member_question8 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question8" value="Somehow" <?php if ($data->member_question8 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do members attend Church service with enthusiasm and excitement?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question9" value="Yes" <?php if ($data->member_question9 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question9" value="No" <?php if ($data->member_question9 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question9" value="Somehow" <?php if ($data->member_question9 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What is the most pressing need of the Local</label>
                                            </div>
                                            <div class="form-check" style="display: none">
                                                <input class="form-check-input" type="radio" name="member_question10" value="Somehow" <?php if ($data->member_question10 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment10 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are the gifts of the Holy Spirit manifest in your church services?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question11" value="Yes" <?php if ($data->member_question11 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question11" value="No" <?php if ($data->member_question11 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question11" value="Somehow" <?php if ($data->member_question11 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment11" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment11 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are members respectful of leadership?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question12" value="Yes" <?php if ($data->member_question12 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question12" value="No" <?php if ($data->member_question12 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question12" value="Somehow" <?php if ($data->member_question12 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment12" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment12 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are evening services well attended?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question13" value="Yes" <?php if ($data->member_question13 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question13" value="No" <?php if ($data->member_question13 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question13" value="Somehow" <?php if ($data->member_question13 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment13" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment13 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are the members and Movements over-burdened with appeal for funds?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question14" value="Yes" <?php if ($data->member_question14 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question14" value="No" <?php if ($data->member_question14 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question14" value="Somehow" <?php if ($data->member_question14 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment14" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment14 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Do the Elders of the Church attend weekday services?</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="member_question15" value="Yes" <?php if ($data->member_question15 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question15" value="No" <?php if ($data->member_question15 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="member_question15" value="Somehow" <?php if ($data->member_question15 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="memberonitor" class="form-control" name="member_comment15" rows="2" placeholder="Details/Comments if any...">{{ $data->member_comment15 }}</textarea>
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
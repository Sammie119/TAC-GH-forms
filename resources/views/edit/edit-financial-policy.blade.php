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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>FINANCIAL POLICY</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('financial-policy') }}" id="fin_eva_aonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->financial_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="fin_eva_a_area" value="{{ $data->fin_eva_a_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="fin_eva_a_district" value="{{ $data->fin_eva_a_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="fin_eva_a_local" value="{{ $data->fin_eva_a_local }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="fin_eva_a_moniter" value="{{ $data->fin_eva_a_moniter }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Monitor's Name</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>    
                                            <label for="" class="form-label">Composition of Finance Committee</label>
                                            
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Appointment</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1a" value="Yes" <?php if ($data->fin_eva_a_question1a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1a" value="No" <?php if ($data->fin_eva_a_question1a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1a" value="Somehow" <?php if ($data->fin_eva_a_question1a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Number (min of 3, max of 5 or 7)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1b" value="Yes" <?php if ($data->fin_eva_a_question1b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1b" value="No" <?php if ($data->fin_eva_a_question1b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1b" value="Somehow" <?php if ($data->fin_eva_a_question1b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Term of Office (2 or 4 years renewable for 2 terms)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1c" value="Yes" <?php if ($data->fin_eva_a_question1c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1c" value="No" <?php if ($data->fin_eva_a_question1c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1c" value="Somehow" <?php if ($data->fin_eva_a_question1c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Positions</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1d" value="Yes" <?php if ($data->fin_eva_a_question1d == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1d" value="No" <?php if ($data->fin_eva_a_question1d == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1d" value="Somehow" <?php if ($data->fin_eva_a_question1d == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1d }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Participation in Presbytery meetings (Constitution)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1e" value="Yes" <?php if ($data->fin_eva_a_question1e == 'Yes') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1e" value="No" <?php if ($data->fin_eva_a_question1e == 'No') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1e" value="Somehow" <?php if ($data->fin_eva_a_question1e == 'Somehow') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1e" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1e }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Signatories</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1f" value="Yes" <?php if ($data->fin_eva_a_question1f == 'Yes') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1f" value="No" <?php if ($data->fin_eva_a_question1f == 'No') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1f" value="Somehow" <?php if ($data->fin_eva_a_question1f == 'Somehow') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1f" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1f }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Discharge of Duties</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question1g" value="Yes" <?php if ($data->fin_eva_a_question1g == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1g" value="No" <?php if ($data->fin_eva_a_question1g == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question1g" value="Somehow" <?php if ($data->fin_eva_a_question1g == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1g" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment1g }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li> 
                                        
                                        <li>
                                            <label for="" class="form-label">Budgets</label>
                    
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Availability</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question2a" value="Yes" <?php if ($data->fin_eva_a_question2a == 'Yes') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2a" value="No" <?php if ($data->fin_eva_a_question2a == 'No') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2a" value="Somehow" <?php if ($data->fin_eva_a_question2a == 'Somehow') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment2a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Minutes on rectification / approval process</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question2b" value="Yes" <?php if ($data->fin_eva_a_question2b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2b" value="No" <?php if ($data->fin_eva_a_question2b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2b" value="Somehow" <?php if ($data->fin_eva_a_question2b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment2b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Budget evaluation</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question2c" value="Yes" <?php if ($data->fin_eva_a_question2c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2c" value="No" <?php if ($data->fin_eva_a_question2c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question2c" value="Somehow" <?php if ($data->fin_eva_a_question2c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment2c }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Sources of funds</label>
                    
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Tithe (how often is it raised?)</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3a" value="Yes" <?php if ($data->fin_eva_a_question3a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3a" value="No" <?php if ($data->fin_eva_a_question3a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3a" value="Somehow" <?php if ($data->fin_eva_a_question3a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Thanksgiving</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3b" value="Yes" <?php if ($data->fin_eva_a_question3b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3b" value="No" <?php if ($data->fin_eva_a_question3b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3b" value="Somehow" <?php if ($data->fin_eva_a_question3b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Donations, Gifts and Appeal for funds</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3c" value="Yes" <?php if ($data->fin_eva_a_question3c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3c" value="No" <?php if ($data->fin_eva_a_question3c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3c" value="Somehow" <?php if ($data->fin_eva_a_question3c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Dues</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3d" value="Yes" <?php if ($data->fin_eva_a_question3d == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3d" value="No" <?php if ($data->fin_eva_a_question3d == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3d" value="Somehow" <?php if ($data->fin_eva_a_question3d == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3d }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Sale of Souvenirs</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3e" value="Yes" <?php if ($data->fin_eva_a_question3e == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3e" value="No" <?php if ($data->fin_eva_a_question3e == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3e" value="Somehow" <?php if ($data->fin_eva_a_question3e == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3e" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3e }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Movement Meeting Proceeds and Programmes</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3f" value="Yes" <?php if ($data->fin_eva_a_question3f == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3f" value="No" <?php if ($data->fin_eva_a_question3f == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3f" value="Somehow" <?php if ($data->fin_eva_a_question3f == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3f" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3f }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Fund raisings / annual harvests / project funds</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3g" value="Yes" <?php if ($data->fin_eva_a_question3g == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3g" value="No" <?php if ($data->fin_eva_a_question3g == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3g" value="Somehow" <?php if ($data->fin_eva_a_question3g == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3g" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3g }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Week Celebrations</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3h" value="Yes" <?php if ($data->fin_eva_a_question3h == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3h" value="No" <?php if ($data->fin_eva_a_question3h == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3h" value="Somehow" <?php if ($data->fin_eva_a_question3h == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3h" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3h }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">National Special Programmes e.g. 21 days</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question3i" value="Yes" <?php if ($data->fin_eva_a_question3i == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3i" value="No" <?php if ($data->fin_eva_a_question3i == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question3i" value="Somehow" <?php if ($data->fin_eva_a_question3i == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3i" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment3i }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Revenue Monitoring</label>
                    
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Tithes and Thanksgiving: How is remittance closed?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question4a" value="Yes" <?php if ($data->fin_eva_a_question4a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question4a" value="No" <?php if ($data->fin_eva_a_question4a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question4a" value="Somehow" <?php if ($data->fin_eva_a_question4a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Is it tithes and offering or tithe and thanksgiving?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">What is the status of remittances</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">tithes and thanksgiving</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c1" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4c1 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">week celebrations</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c2" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4c2 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">conventions</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c3" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4c3 }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How are appeals raised? - Review from Spot check if any</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4d }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How are donations received and utilised?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4e" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4e }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is the recording process for all income lines?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4f" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment4f }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Expenditure</label>
                    
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">How is expenditure approval process followed?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">What has been the reaction of recipients of cashflows on</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">Disbursements from imprest</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b1" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5b1 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">Disbursements from income received after service</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b2" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5b2 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">Overspending of budget</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b3" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5b3 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">Expenditure review / request for supporting documents</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b4" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5b4 }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is the imprest system operated?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment5c }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Custody of Funds</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Is MOMO operational at the assembly?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question6a" value="Yes" <?php if ($data->fin_eva_a_question6a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6a" value="No" <?php if ($data->fin_eva_a_question6a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6a" value="Somehow" <?php if ($data->fin_eva_a_question6a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment6a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is it operated and monitored?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment6b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How are funds kept</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">at the bank?</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question6c1" value="Yes" <?php if ($data->fin_eva_a_question6c1 == 'Yes') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question6c1" value="No" <?php if ($data->fin_eva_a_question6c1 == 'No') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c1" rows="2" placeholder="If at bank or yes, how is banking performed?">{{ $data->fin_eva_a_comment6c1 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">with the treasurer?</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question6c2" value="Yes" <?php if ($data->fin_eva_a_question6c2 == 'Yes') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question6c2" value="No" <?php if ($data->fin_eva_a_question6c2 == 'No') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c2" rows="2" placeholder="If with treasurer or yes, how is it monitored?">{{ $data->fin_eva_a_comment6c2 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">How are direct deposits by members accounted for?</label>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c3" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment6c3 }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Does movements keep their funds?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question6d" value="Yes" <?php if ($data->fin_eva_a_question6d == 'Yes') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6d" value="No" <?php if ($data->fin_eva_a_question6d == 'No') echo "checked";?>>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6d" value="Somehow">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment6d }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Is the signatory policy complied with?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question6e" value="Yes" <?php if ($data->fin_eva_a_question6e == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6e" value="No" <?php if ($data->fin_eva_a_question6e == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question6e" value="Somehow" <?php if ($data->fin_eva_a_question6e == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6e" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment6e }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Allowances For Ministers</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Out of Station / Honourarium</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">Both paid by Area, District and Local visited</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7a1" value="Yes" <?php if ($data->fin_eva_a_question7a1 == 'Yes') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7a1" value="No" <?php if ($data->fin_eva_a_question7a1 == 'No') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7a1" value="Somehow" <?php if ($data->fin_eva_a_question7a1 == 'Somehow') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7a1" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7a1 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">Beneficiary Obligation</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7a2" value="Yes" <?php if ($data->fin_eva_a_question7a2 == 'Yes') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7a2" value="No" <?php if ($data->fin_eva_a_question7a2 == 'No') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7a2" value="Somehow" <?php if ($data->fin_eva_a_question7a2 == 'Somehow') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7a2" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7a2 }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Car / Maintenance</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">Beneficiary obligation</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7b1" value="Yes" <?php if ($data->fin_eva_a_question7b1 == 'Yes') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b1" value="No" <?php if ($data->fin_eva_a_question7b1 == 'No') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b1" value="Somehow" <?php if ($data->fin_eva_a_question7b1 == 'Somehow') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b1" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7b1 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">As part of allowances</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7b2" value="Yes" <?php if ($data->fin_eva_a_question7b2 == 'Yes') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b2" value="No" <?php if ($data->fin_eva_a_question7b2 == 'No') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b2" value="Somehow" <?php if ($data->fin_eva_a_question7b2 == 'Somehow') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b2" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7b2 }}</textarea>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <label for="" class="form-label">Both as allowances and contribution as beneficiary obligation</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7b3" value="Yes" <?php if ($data->fin_eva_a_question7b3 == 'Yes') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b3" value="No" <?php if ($data->fin_eva_a_question7b3 == 'No') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7b3" value="Somehow" <?php if ($data->fin_eva_a_question7b3 == 'Somehow') echo "checked";?>>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b3" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7b3 }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                
                                                <li>
                                                    <label for="" class="form-label">Transportation</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">Beneficiary obligation compliance</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7c" value="Yes" <?php if ($data->fin_eva_a_question7c == 'Yes') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7c" value="No" <?php if ($data->fin_eva_a_question7c == 'No') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7c" value="Somehow" <?php if ($data->fin_eva_a_question7c == 'Somehow') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7c }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                
                                                <li>
                                                    <label for="" class="form-label">Responsibility</label>
                                                    <ol>
                                                        <li>
                                                            <label for="" class="form-label">Paid by HQ</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" required name="fin_eva_a_question7d" value="Yes" <?php if ($data->fin_eva_a_question7d == 'Yes') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7d" value="No" <?php if ($data->fin_eva_a_question7d == 'No') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    No
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="fin_eva_a_question7d" value="Somehow" <?php if ($data->fin_eva_a_question7d == 'Somehow') echo "checked";?> >
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Somehow
                                                                </label>
                                                            </div>
                                                            <div class="mb">
                                                                <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment7d }}</textarea>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Welfare</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Does the assembly operate a welfare scheme?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is the welfare process carried out?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8b }}</textarea>
                                                    </div>  
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Is there a committee responsible for the welfare scheme?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question8c" value="Yes" <?php if ($data->fin_eva_a_question8c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question8c" value="No" <?php if ($data->fin_eva_a_question8c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question8c" value="Somehow" <?php if ($data->fin_eva_a_question8c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Does the welfare scheme operate a separate bank account?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_a_question8d" value="Yes" <?php if ($data->fin_eva_a_question8d == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question8d" value="No" <?php if ($data->fin_eva_a_question8d == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_a_question8d" value="Somehow" <?php if ($data->fin_eva_a_question8d == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8d }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Who are the signatories to the Welfare Scheme account?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8e" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8e }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">What are the challenges of the welfare scheme?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8f" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_a_comment8f }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
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
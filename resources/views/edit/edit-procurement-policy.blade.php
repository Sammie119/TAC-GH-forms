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
                            {{-- <div class="card-header d-flex justify-content-center"><h4>PROCUREMENT POLICY</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('procurement-policy') }}" id="fin_eva_bonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->procurement_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="fin_eva_b_area" value="{{ $data->fin_eva_b_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="fin_eva_b_district" value="{{ $data->fin_eva_b_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="fin_eva_b_local" value="{{ $data->fin_eva_b_local }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Local</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="fin_eva_b_moniter" value="{{ $data->fin_eva_b_moniter }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Monitor's Name</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>    
                                            <label for="" class="form-label">Knowledge of Policy</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">How conversant are officers with the Procurement Policy</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment1a" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment1a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Committee existence?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question1b" value="Yes" <?php if ($data->fin_eva_b_question1b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1b" value="No" <?php if ($data->fin_eva_b_question1b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1b" value="Somehow" <?php if ($data->fin_eva_b_question1b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment1b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment1b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Committee involvement in acquisitions / purchases</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question1c" value="Yes" <?php if ($data->fin_eva_b_question1c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1c" value="No" <?php if ($data->fin_eva_b_question1c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1c" value="Somehow" <?php if ($data->fin_eva_b_question1c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment1c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment1c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Challenges between Procurement and Finance Committees if any</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question1d" value="Yes" <?php if ($data->fin_eva_b_question1d == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1d" value="No" <?php if ($data->fin_eva_b_question1d == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question1d" value="Somehow" <?php if ($data->fin_eva_b_question1d == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment1d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment1d }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li> 
                                        
                                        <li>
                                            <label for="" class="form-label">Acquisition of Fixed Assets</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">How is sourcing done?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment2a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment2a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Is sourcing backed by supporting documents?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question2b" value="Yes" <?php if ($data->fin_eva_b_question2b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question2b" value="No" <?php if ($data->fin_eva_b_question2b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question2b" value="Somehow" <?php if ($data->fin_eva_b_question2b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment2b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment2b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Is selection of source credible? - from Presbytery minutes</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question2c" value="Yes" <?php if ($data->fin_eva_b_question2c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question2c" value="No" <?php if ($data->fin_eva_b_question2c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question2c" value="Somehow" <?php if ($data->fin_eva_b_question2c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment2c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment2c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is the approval process complied with?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment2d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment2d }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>   
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Exceptional cases</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Has there been any one-off acquisition / expenditure?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question3a" value="Yes" <?php if ($data->fin_eva_b_question3a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question3a" value="No" <?php if ($data->fin_eva_b_question3a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question3a" value="Somehow" <?php if ($data->fin_eva_b_question3a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment3a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment3a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is a one-off acquisition undertaken</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment3b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment3b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Was the one-off expenditure an emergency? State the occurences</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question3c" value="Yes" <?php if ($data->fin_eva_b_question3c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question3c" value="No" <?php if ($data->fin_eva_b_question3c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question3c" value="Somehow" <?php if ($data->fin_eva_b_question3c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment3c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment3c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How has Finance been involved in a one-off procurement / expenditure</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment3d" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment3d }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Planning for Procurements</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Does the level / unit plan for procurements?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question4a" value="Yes" <?php if ($data->fin_eva_b_question4a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question4a" value="No" <?php if ($data->fin_eva_b_question4a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question4a" value="Somehow" <?php if ($data->fin_eva_b_question4a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment4a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment4a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How is the plan undertaken and documented?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment4b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment4b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Does procurement plans include total costs ie transport, installation etc?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question4c" value="Yes" <?php if ($data->fin_eva_b_question4c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question4c" value="No" <?php if ($data->fin_eva_b_question4c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question4c" value="Somehow" <?php if ($data->fin_eva_b_question4c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment4c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment4c }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Procurement Process Test Check</label>
                                            <ol type="a">
                                                <label for="" class="form-label">For items procured within evaluation scope, state whether</label>
                                                <li>
                                                    <label for="" class="form-label">the procured assets exist</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question5a" value="Yes" <?php if ($data->fin_eva_b_question5a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5a" value="No" <?php if ($data->fin_eva_b_question5a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5a" value="Somehow" <?php if ($data->fin_eva_b_question5a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment5a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment5a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">procured assets followed the policy and process</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question5b" value="Yes" <?php if ($data->fin_eva_b_question5b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5b" value="No" <?php if ($data->fin_eva_b_question5b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5b" value="Somehow" <?php if ($data->fin_eva_b_question5b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment5b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment5b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">assess the current state of the assets under review</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question5c" value="Yes" <?php if ($data->fin_eva_b_question5c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5c" value="No" <?php if ($data->fin_eva_b_question5c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question5c" value="Somehow" <?php if ($data->fin_eva_b_question5c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment5c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment5c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">report on observations</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment5d" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment5d }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Compliance with Approval limits</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Max of GHC 3,000 for Assembly / District Procurement Committee</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question6a" value="Yes" <?php if ($data->fin_eva_b_question6a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6a" value="No" <?php if ($data->fin_eva_b_question6a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6a" value="Somehow" <?php if ($data->fin_eva_b_question6a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment6a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment6a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Above GHC 3,000 for Assembly / District Presbytery</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question6b" value="Yes" <?php if ($data->fin_eva_b_question6b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6b" value="No" <?php if ($data->fin_eva_b_question6b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6b" value="Somehow" <?php if ($data->fin_eva_b_question6b == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment6b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment6b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Was procurement at arms length?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question6c" value="Yes" <?php if ($data->fin_eva_b_question6c == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6c" value="No" <?php if ($data->fin_eva_b_question6c == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question6c" value="Somehow" <?php if ($data->fin_eva_b_question6c == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment6c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment6c }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Ceasure of Contract</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Has a contractor ever decided to cease continuation of contract?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question7a" value="Yes" <?php if ($data->fin_eva_b_question7a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question7a" value="No" <?php if ($data->fin_eva_b_question7a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question7a" value="Somehow" <?php if ($data->fin_eva_b_question7a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment7a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment7a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">What caused the decision?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment7b" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment7b }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How did this decision affect the contract or procurement process</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment7c" rows="2" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment7c }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">How did the unit address any challenges arising from the process?</label>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment7d" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment7d }}</textarea>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <label for="" class="form-label">Grants and Appeals</label>
                                            <ol type="a">
                                                <li>
                                                    <label for="" class="form-label">Has the unit ever applied for a grant from HQ? Give evidence</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question8a" value="Yes" <?php if ($data->fin_eva_b_question8a == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question8a" value="No" <?php if ($data->fin_eva_b_question8a == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question8a" value="Somehow" <?php if ($data->fin_eva_b_question8a == 'Somehow') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Somehow
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment8a" rows="3" placeholder="Details/Comments if any...">{{ $data->fin_eva_b_comment8a }}</textarea>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <label for="" class="form-label">Was the grant granted?</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" required name="fin_eva_b_question8b" value="Yes" <?php if ($data->fin_eva_b_question8b == 'Yes') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="fin_eva_b_question8b" value="No" <?php if ($data->fin_eva_b_question8b == 'No') echo "checked";?> >
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            No
                                                        </label>
                                                    </div>
                                                    <div class="mb">
                                                        <textarea form="fin_eva_bonitor" class="form-control" name="fin_eva_b_comment8b" rows="3" placeholder="If yes, how was it utilised? OR If no, how did the unit address the issue for which the grant was applied?">{{ $data->fin_eva_b_comment8b }}</textarea>
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
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
                    <div class="d-flex justify-content-center mt-3">
                        <div class="card text-dark bg-light mb-3 col-8">
                            {{-- <div class="card-header d-flex justify-content-center"><h4>RECORDING AND BOOK KEEPING - AREA</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('record-books-district') }}" id="rec_distonitor" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->record_id }}">
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="rec_dist_area" value="{{ $data->rec_dist_area }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of Area</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-4"> 
                                            <input name="rec_dist_district" value="{{ $data->rec_dist_district }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Name of District</small>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <input name="rec_dist_prepared_by" value="{{ $data->rec_dist_prepared_by }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Prepared By</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-4"> 
                                            <input name="rec_dist_year" value="{{ $data->rec_dist_year }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Year</small>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <input name="rec_dist_period" value="{{ $data->rec_dist_period }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">Period</small>
                                        </div>
                                        <div class="col-sm-4"> 
                                            <input name="rec_dist_w_p" value="{{ $data->rec_dist_w_p }}" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                                            <small class="d-flex justify-content-center">W/P NO.</small>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Cash book</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question1" value="Yes" <?php if ($data->rec_dist_question1 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question1" value="No" <?php if ($data->rec_dist_question1 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question1" value="Somehow" <?php if ($data->rec_dist_question1 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment1" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment1 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Incomplete Records</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question2" value="Yes" <?php if ($data->rec_dist_question2 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question2" value="No" <?php if ($data->rec_dist_question2 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question2" value="Somehow" <?php if ($data->rec_dist_question2 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment2" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment2 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Individual tithe register</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question3" value="Yes" <?php if ($data->rec_dist_question3 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question3" value="No" <?php if ($data->rec_dist_question3 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question3" value="Somehow" <?php if ($data->rec_dist_question3 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment3" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment3 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Multiple Offering</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question4" value="Yes" <?php if ($data->rec_dist_question4 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question4" value="No" <?php if ($data->rec_dist_question4 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question4" value="Somehow" <?php if ($data->rec_dist_question4 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment4" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment4 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Improper Records</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question5" value="Yes" <?php if ($data->rec_dist_question5 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question5" value="No" <?php if ($data->rec_dist_question5 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question5" value="Somehow" <?php if ($data->rec_dist_question5 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment5" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment5 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">New book of records</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question6" value="Yes" <?php if ($data->rec_dist_question6 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question6" value="No" <?php if ($data->rec_dist_question6 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question6" value="Somehow" <?php if ($data->rec_dist_question6 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment6" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment6 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Form A</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question7" value="Yes" <?php if ($data->rec_dist_question7 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question7" value="No" <?php if ($data->rec_dist_question7 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question7" value="Somehow" <?php if ($data->rec_dist_question7 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment7" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment7 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Bank statement available</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question8" value="Yes" <?php if ($data->rec_dist_question8 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question8" value="No" <?php if ($data->rec_dist_question8 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question8" value="Somehow" <?php if ($data->rec_dist_question8 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment8" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment8 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Bank Reconciliation</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question9" value="Yes" <?php if ($data->rec_dist_question9 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question9" value="No" <?php if ($data->rec_dist_question9 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question9" value="Somehow" <?php if ($data->rec_dist_question9 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment9" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment9 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Form B</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question10" value="Yes" <?php if ($data->rec_dist_question10 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question10" value="No" <?php if ($data->rec_dist_question10 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question10" value="Somehow" <?php if ($data->rec_dist_question10 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment10" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment10 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Form C</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question11" value="Yes" <?php if ($data->rec_dist_question11 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question11" value="No" <?php if ($data->rec_dist_question11 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question11" value="Somehow" <?php if ($data->rec_dist_question11 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment11" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment11 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Presbytery / Pastorate Minutes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question12" value="Yes" <?php if ($data->rec_dist_question12 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question12" value="No" <?php if ($data->rec_dist_question12 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question12" value="Somehow" <?php if ($data->rec_dist_question12 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment12" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment12 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Payment Vouchers</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question13" value="Yes" <?php if ($data->rec_dist_question13 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question13" value="No" <?php if ($data->rec_dist_question13 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question13" value="Somehow" <?php if ($data->rec_dist_question13 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment13" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment13 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Deposit slips</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question14" value="Yes" <?php if ($data->rec_dist_question14 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question14" value="No" <?php if ($data->rec_dist_question14 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question14" value="Somehow" <?php if ($data->rec_dist_question14 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment14" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment14 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Receipts for payments made (apart from National and Area)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question15" value="Yes" <?php if ($data->rec_dist_question15 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question15" value="No" <?php if ($data->rec_dist_question15 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question15" value="Somehow" <?php if ($data->rec_dist_question15 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment15" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment15 }}</textarea>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Registration, title documents, site plan for acquisitions - Land</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question16" value="Yes" <?php if ($data->rec_dist_question16 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question16" value="No" <?php if ($data->rec_dist_question16 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question16" value="Somehow" <?php if ($data->rec_dist_question16 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment16" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment16 }}</textarea>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Cheque books (used)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question17" value="Yes" <?php if ($data->rec_dist_question17 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question17" value="No" <?php if ($data->rec_dist_question17 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question17" value="Somehow" <?php if ($data->rec_dist_question17 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment17" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment17 }}</textarea>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Supporting receipt, invoices</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question18" value="Yes" <?php if ($data->rec_dist_question18 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question18" value="No" <?php if ($data->rec_dist_question18 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question18" value="Somehow" <?php if ($data->rec_dist_question18 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment18" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment18 }}</textarea>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Welfare records</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question19" value="Yes" <?php if ($data->rec_dist_question19 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question19" value="No" <?php if ($data->rec_dist_question19 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question19" value="Somehow" <?php if ($data->rec_dist_question19 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment19" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment19 }}</textarea>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Budgets</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question20" value="Yes" <?php if ($data->rec_dist_question20 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question20" value="No" <?php if ($data->rec_dist_question20 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question20" value="Somehow" <?php if ($data->rec_dist_question20 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment20" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment20 }}</textarea>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Periodic Financial Statements</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="rec_dist_question21" value="Yes" <?php if ($data->rec_dist_question21 == 'Yes') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question21" value="No" <?php if ($data->rec_dist_question21 == 'No') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    No
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="rec_dist_question21" value="Somehow" <?php if ($data->rec_dist_question21 == 'Somehow') echo "checked";?> >
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Somehow
                                                </label>
                                            </div>
                                            <div class="mb">
                                                <textarea form="rec_distonitor" class="form-control" name="rec_dist_comment21" rows="2" placeholder="Details/Comments if any...">{{ $data->rec_dist_comment21 }}</textarea>
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
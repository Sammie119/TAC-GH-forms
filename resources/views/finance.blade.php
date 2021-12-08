@extends('layouts.app')

@section('title', 'TAC-forms | Finance')

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
            <div class="card-header"><h3>Financial Evaluation Forms</h3></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES A --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form13 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link active" id="fin-eva-a-tab" data-bs-toggle="tab" data-bs-target="#fin-eva-a" type="button" role="tab" aria-controls="fin-eva-a" aria-selected="false">Financial Policy</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES B --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form14 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="fin-eva-b-tab" data-bs-toggle="tab" data-bs-target="#fin-eva-b" type="button" role="tab" aria-controls="fin-eva-b" aria-selected="false">Procurement Policy</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING AREA --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form15 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-area-tab" data-bs-toggle="tab" data-bs-target="#rec-area" type="button" role="tab" aria-controls="rec-area" aria-selected="false">Records - Area</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING DISTRICT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form16 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-dist-tab" data-bs-toggle="tab" data-bs-target="#rec-dist" type="button" role="tab" aria-controls="rec-dist" aria-selected="false">Records - District</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING LOCAL --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form17 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-local-tab" data-bs-toggle="tab" data-bs-target="#rec-local" type="button" role="tab" aria-controls="rec-local" aria-selected="false">Records - Local</button>
                        </li>

                    </ul>


                    <div class="tab-content" id="myTabContent">

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES A--}}
                        <div class="tab-pane fade show active" id="fin-eva-a" role="tabcard" aria-labelledby="fin-eva-a-tab" <?php if (Auth()->user()->form13 == 1) echo 'style="display: none"' ?> >
                            @include('forms.financial_policy')
                        </div>

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES B--}}
                        <div class="tab-pane fade" id="fin-eva-b" role="tabcard" aria-labelledby="fin-eva-b-tab">
                            @include('forms.procurement_policy')
                        </div>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING AREA --}}
                        <div class="tab-pane fade" id="rec-area" role="tabcard" aria-labelledby="rec-area-tab">
                            @include('forms.report-books-area')
                        </div>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING DISTRICT --}}
                        <div class="tab-pane fade" id="rec-dist" role="tabcard" aria-labelledby="rec-dist-tab">
                            @include('forms.report-books-district')
                        </div>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING LOCAL --}}
                        <div class="tab-pane fade" id="rec-local" role="tabcard" aria-labelledby="rec-local-tab">
                            @include('forms.report-books-local')
                        </div>

                    </div>
                </div>
            </div>
          </div>
    </div>
    
@endsection
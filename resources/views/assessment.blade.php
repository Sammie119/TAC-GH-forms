@extends('layouts.app')

@section('title', 'TAC-forms | Forms')

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
            <div class="card-header"><h3>Assessments</h3></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        {{-- AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form2 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link active" id="areasupq-tab" data-bs-toggle="tab" data-bs-target="#areasupq" type="button" role="tab" aria-controls="areasupq" aria-selected="false">Area Sup. Quest</button>
                        </li>

                        {{-- DISTRICT PASTORS' DIRECT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form5 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="pastorques-tab" data-bs-toggle="tab" data-bs-target="#pastorques" type="button" role="tab" aria-controls="pastorques" aria-selected="false">Pastor Quest</button>
                        </li>

                        {{-- PASTOR'S ASSESSMENT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form11 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="past-ass-tab" data-bs-toggle="tab" data-bs-target="#past-ass" type="button" role="tab" aria-controls="past-ass" aria-selected="false">Pastor Ass</button>
                        </li>

                        {{-- AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form12 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="sup-ass-tab" data-bs-toggle="tab" data-bs-target="#sup-ass" type="button" role="tab" aria-controls="sup-ass" aria-selected="false">Area Sup. Ass</button>
                        </li>

                        {{-- PRESIDING ELDER'S ASSESSMENT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form18 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="pres-ass-tab" data-bs-toggle="tab" data-bs-target="#pres-ass" type="button" role="tab" aria-controls="pres-ass" aria-selected="false">Presiding Ass</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        {{-- AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE --}}
                        <div class="tab-pane fade show active" id="areasupq" role="tabcard" aria-labelledby="areasupq-tab" <?php if (Auth()->user()->form2 == 1) echo 'style="display: none"' ?>>
                            @include('forms.area_sup_questions')
                        </div>

                        {{-- DISTRICT PASTORS' DIRECT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="pastorques" role="tabcard" aria-labelledby="pastorques-tab">
                            @include('forms.district_pastor_question')
                        </div>

                        {{-- PASTOR'S ASSESSMENT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="past-ass" role="tabcard" aria-labelledby="past-ass-tab">
                            @include('forms.pastor-assessment')
                        </div>

                        {{-- AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="sup-ass" role="tabcard" aria-labelledby="sup-ass-tab">
                            @include('forms.sup-assessment')
                        </div>

                        {{-- PRESIDING ELDER'S ASSESSMENT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="pres-ass" role="tabcard" aria-labelledby="pres-ass-tab">
                            @include('forms.presiding-assessment')
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    
@endsection
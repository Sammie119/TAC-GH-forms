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
            <div class="card-header"><h3>Forms</h3></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        {{-- LOCAL LEVEL QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form8 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link active" id="LLM-tab" data-bs-toggle="tab" data-bs-target="#LLM" type="button" role="tab" aria-controls="LLM" aria-selected="true">Loc. Level</button>
                        </li>

                        {{-- DISTRICT OFFICERS LEVEL QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form4 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="DLM-tab" data-bs-toggle="tab" data-bs-target="#DLM" type="button" role="tab" aria-controls="DLM" aria-selected="false">Dist. Level</button>
                        </li>

                        {{-- MEMBER QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form9 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false">Member</button>
                        </li>

                        {{-- SUPERINTENDENT'S VISITATION REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form1 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="areahead-tab" data-bs-toggle="tab" data-bs-target="#areahead" type="button" role="tab" aria-controls="areahead" aria-selected="false">Area Head</button>
                        </li>

                        {{-- DISTRICT PASTOR'S VISITATION REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form6 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="distpast-tab" data-bs-toggle="tab" data-bs-target="#distpast" type="button" role="tab" aria-controls="distpast" aria-selected="false">Dist. Pastor</button>
                        </li>

                        {{-- COMMUNITY IMPRESSION  REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form3 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="commrep-tab" data-bs-toggle="tab" data-bs-target="#commrep" type="button" role="tab" aria-controls="commrep" aria-selected="false">Community</button>
                        </li>

                        {{-- AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form2 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="areasupq-tab" data-bs-toggle="tab" data-bs-target="#areasupq" type="button" role="tab" aria-controls="areasupq" aria-selected="false">Sup. Quest</button>
                        </li>

                        {{-- DISTRICT PASTORS' DIRECT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form5 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="pastorques-tab" data-bs-toggle="tab" data-bs-target="#pastorques" type="button" role="tab" aria-controls="pastorques" aria-selected="false">Past. Quest</button>
                        </li>

                        {{-- LOCAL EVANGELISM --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form7 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="evange-tab" data-bs-toggle="tab" data-bs-target="#evange" type="button" role="tab" aria-controls="evange" aria-selected="false">Evangelism</button>
                        </li>

                        {{-- MONITOR'S  REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form10 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="monirep-tab" data-bs-toggle="tab" data-bs-target="#monirep" type="button" role="tab" aria-controls="monirep" aria-selected="false">Monitor's Rep.</button>
                        </li>

                        {{-- PASTOR'S ASSESSMENT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form11 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="past-ass-tab" data-bs-toggle="tab" data-bs-target="#past-ass" type="button" role="tab" aria-controls="past-ass" aria-selected="false">Past. Ass</button>
                        </li>

                        {{-- AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form12 == 1) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="sup-ass-tab" data-bs-toggle="tab" data-bs-target="#sup-ass" type="button" role="tab" aria-controls="sup-ass" aria-selected="false">Sup. Ass</button>
                        </li>
                    </ul>


                    <div class="tab-content" id="myTabContent">
                        {{-- LOCAL LEVEL QUESTIONNAIRE --}}
                        <div class="tab-pane fade show active" id="LLM" role="tabcard" aria-labelledby="LLM-tab" <?php if (Auth()->user()->form8 == 1) echo 'style="display: none"' ?> >
                            @include('forms.local_level_question')                            
                        </div>

                        {{-- DISTRICT OFFICERS LEVEL QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="DLM" role="tabcard" aria-labelledby="DLM-tab">
                            @include('forms.district_level_monitor')
                        </div>

                        {{-- MEMBER QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="member" role="tabcard" aria-labelledby="member-tab">
                            @include('forms.member')
                        </div>

                        {{-- MONITOR'S  REPORT --}}
                        <div class="tab-pane fade" id="monirep" role="tabcard" aria-labelledby="monirep-tab">
                            @include('forms.monitor-report')
                        </div>

                        {{-- SUPERINTENDENT'S VISITATION REPORT --}}
                        <div class="tab-pane fade" id="areahead" role="tabcard" aria-labelledby="areahead-tab">
                            @include('forms.area_head')
                        </div>

                        {{-- DISTRICT PASTOR'S VISITATION REPORT --}}
                        <div class="tab-pane fade" id="distpast" role="tabcard" aria-labelledby="distpast-tab">
                            @include('forms.district_pastor')
                        </div>

                        {{-- COMMUNITY IMPRESSION  REPORT --}}
                        <div class="tab-pane fade" id="commrep" role="tabcard" aria-labelledby="commrep-tab">
                            @include('forms.community_rep')
                        </div>

                        {{-- AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="areasupq" role="tabcard" aria-labelledby="areasupq-tab">
                            @include('forms.area_sup_questions')
                        </div>

                        {{-- DISTRICT PASTORS' DIRECT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="pastorques" role="tabcard" aria-labelledby="pastorques-tab">
                            @include('forms.district_pastor_question')
                        </div>

                        {{-- LOCAL EVANGELISM --}}
                        <div class="tab-pane fade" id="evange" role="tabcard" aria-labelledby="evange-tab">
                            @include('forms.local_evangelism')
                        </div>

                        {{-- PASTOR'S ASSESSMENT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="past-ass" role="tabcard" aria-labelledby="past-ass-tab">
                            @include('forms.pastor-assessment')
                        </div>

                        {{-- AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE --}}
                        <div class="tab-pane fade" id="sup-ass" role="tabcard" aria-labelledby="sup-ass-tab">
                            @include('forms.sup-assessment')
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    
@endsection
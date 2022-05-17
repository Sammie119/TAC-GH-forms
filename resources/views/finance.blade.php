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
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form13 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link active" id="fin-eva-a-tab" data-bs-toggle="tab" data-bs-target="#fin-eva-a" type="button" role="tab" aria-controls="fin-eva-a" aria-selected="false">Financial Policy</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES B --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form14 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="fin-eva-b-tab" data-bs-toggle="tab" data-bs-target="#fin-eva-b" type="button" role="tab" aria-controls="fin-eva-b" aria-selected="false">Procurement Policy</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING AREA --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form15 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-area-tab" data-bs-toggle="tab" data-bs-target="#rec-area" type="button" role="tab" aria-controls="rec-area" aria-selected="false">Records - Area</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING DISTRICT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form16 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-dist-tab" data-bs-toggle="tab" data-bs-target="#rec-dist" type="button" role="tab" aria-controls="rec-dist" aria-selected="false">Records - District</button>
                        </li>

                        {{-- FINANCIAL EVALUATION SHEET - RECORDING AND BOOK KEEPING LOCAL --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form17 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="rec-local-tab" data-bs-toggle="tab" data-bs-target="#rec-local" type="button" role="tab" aria-controls="rec-local" aria-selected="false">Records - Local</button>
                        </li>

                        {{-- Financial Assessment --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form22 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="fin-ass-tab" data-bs-toggle="tab" data-bs-target="#fin-ass" type="button" role="tab" aria-controls="fin-ass" aria-selected="false">Financial Ass.</button>
                        </li>

                    </ul>


                    <div class="tab-content" id="myTabContent">

                        {{-- FINANCIAL EVALUATION SHEET - GENERAL POLICIES A--}}
                        <div class="tab-pane fade show active" id="fin-eva-a" role="tabcard" aria-labelledby="fin-eva-a-tab" <?php if (Auth()->user()->form13 == 0) echo 'style="display: none"' ?> >
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

                        {{-- Financial Assessment --}}
                        <div class="tab-pane fade" id="fin-ass" role="tabcard" aria-labelledby="fin-ass-tab">
                            @include('forms.financial_assessment')
                        </div>

                    </div>
                </div>
            </div>
          </div>
    </div>

    @push('scripts')
    <script>
        window.onload = function(){

            // get number of weeks
            function weekCount(year, month_number) {
                // month_number is in the range 1..12
                var firstOfMonth = new Date(year, month_number-1, 1);
                var lastOfMonth = new Date(year, month_number, 0);

                var used = firstOfMonth.getDay() + lastOfMonth.getDate();

                return Math.ceil( used / 7);
            }

            // get Month Number
            function getMonth(month) {
                d = new Date().toString().split(" ")
                d[1] = month
                d = new Date(d.join(' ')).getMonth()+1
                if(!isNaN(d)) {
                    return d
                }
                return -1;
            }

            // Attendance Analysis
            $('#fin_ass_tithe1, #fin_ass_offering1, #fin_ass_others1').bind('input',function(){

                // row calculation
                var fin_ass_tithe1 = document.getElementById("fin_ass_tithe1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_tithe1").value);
                var fin_ass_offering1 = document.getElementById("fin_ass_offering1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_offering1").value);
                var fin_ass_others1 = document.getElementById("fin_ass_others1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_others1").value);

                var sum = fin_ass_tithe1 + fin_ass_offering1 + fin_ass_others1;

                document.getElementById("fin_ass_total1").value = sum.toFixed(2);

                // Adding the totals
                var fin_ass_total1 = document.getElementById("fin_ass_total1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total1").value);
                var fin_ass_total2 = document.getElementById("fin_ass_total2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total2").value);
                var fin_ass_total3 = document.getElementById("fin_ass_total3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total3").value);
                var fin_ass_total4 = document.getElementById("fin_ass_total4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total4").value);
                var fin_ass_total5 = document.getElementById("fin_ass_total5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total5").value);
                
                var grand_sum = fin_ass_total1+fin_ass_total2+fin_ass_total3+fin_ass_total4+fin_ass_total5;

                document.getElementById("fin_ass_gdtotal").value = grand_sum.toFixed(2);

            });

            $('#fin_ass_tithe2, #fin_ass_offering2, #fin_ass_others2').bind('input',function(){

                // row calculation
                var fin_ass_tithe2 = document.getElementById("fin_ass_tithe2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_tithe2").value);
                var fin_ass_offering2 = document.getElementById("fin_ass_offering2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_offering2").value);
                var fin_ass_others2 = document.getElementById("fin_ass_others2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_others2").value);

                var sum = fin_ass_tithe2 + fin_ass_offering2 + fin_ass_others2;

                document.getElementById("fin_ass_total2").value = sum.toFixed(2);

                // Adding the totals
                var fin_ass_total1 = document.getElementById("fin_ass_total1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total1").value);
                var fin_ass_total2 = document.getElementById("fin_ass_total2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total2").value);
                var fin_ass_total3 = document.getElementById("fin_ass_total3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total3").value);
                var fin_ass_total4 = document.getElementById("fin_ass_total4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total4").value);
                var fin_ass_total5 = document.getElementById("fin_ass_total5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total5").value);

                var grand_sum = fin_ass_total1+fin_ass_total2+fin_ass_total3+fin_ass_total4+fin_ass_total5;

                document.getElementById("fin_ass_gdtotal").value = grand_sum.toFixed(2);

            });

            $('#fin_ass_tithe3, #fin_ass_offering3, #fin_ass_others3').bind('input',function(){

                // row calculation
                var fin_ass_tithe3 = document.getElementById("fin_ass_tithe3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_tithe3").value);
                var fin_ass_offering3 = document.getElementById("fin_ass_offering3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_offering3").value);
                var fin_ass_others3 = document.getElementById("fin_ass_others3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_others3").value);

                var sum = fin_ass_tithe3 + fin_ass_offering3 + fin_ass_others3;

                document.getElementById("fin_ass_total3").value = sum.toFixed(2);

                // Adding the totals
                var fin_ass_total1 = document.getElementById("fin_ass_total1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total1").value);
                var fin_ass_total2 = document.getElementById("fin_ass_total2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total2").value);
                var fin_ass_total3 = document.getElementById("fin_ass_total3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total3").value);
                var fin_ass_total4 = document.getElementById("fin_ass_total4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total4").value);
                var fin_ass_total5 = document.getElementById("fin_ass_total5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total5").value);

                var grand_sum = fin_ass_total1+fin_ass_total2+fin_ass_total3+fin_ass_total4+fin_ass_total5;

                document.getElementById("fin_ass_gdtotal").value = grand_sum.toFixed(2);

            });

            $('#fin_ass_tithe4, #fin_ass_offering4, #fin_ass_others4').bind('input',function(){

                // row calculation
                var fin_ass_tithe4 = document.getElementById("fin_ass_tithe4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_tithe4").value);
                var fin_ass_offering4 = document.getElementById("fin_ass_offering4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_offering4").value);
                var fin_ass_others4 = document.getElementById("fin_ass_others4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_others4").value);

                var sum = fin_ass_tithe4 + fin_ass_offering4 + fin_ass_others4;

                document.getElementById("fin_ass_total4").value = sum.toFixed(2);

                // Adding the totals
                var fin_ass_total1 = document.getElementById("fin_ass_total1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total1").value);
                var fin_ass_total2 = document.getElementById("fin_ass_total2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total2").value);
                var fin_ass_total3 = document.getElementById("fin_ass_total3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total3").value);
                var fin_ass_total4 = document.getElementById("fin_ass_total4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total4").value);
                var fin_ass_total5 = document.getElementById("fin_ass_total5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total5").value);

                var grand_sum = fin_ass_total1+fin_ass_total2+fin_ass_total3+fin_ass_total4+fin_ass_total5;

                document.getElementById("fin_ass_gdtotal").value = grand_sum.toFixed(2);

            });

            $('#fin_ass_tithe5, #fin_ass_offering5, #fin_ass_others5').bind('input',function(){

                // row calculation
                var fin_ass_tithe5 = document.getElementById("fin_ass_tithe5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_tithe5").value);
                var fin_ass_offering5 = document.getElementById("fin_ass_offering5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_offering5").value);
                var fin_ass_others5 = document.getElementById("fin_ass_others5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_others5").value);

                var sum = fin_ass_tithe5 + fin_ass_offering5 + fin_ass_others5;

                document.getElementById("fin_ass_total5").value = sum.toFixed(2);

                // Adding the totals
                var fin_ass_total1 = document.getElementById("fin_ass_total1").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total1").value);
                var fin_ass_total2 = document.getElementById("fin_ass_total2").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total2").value);
                var fin_ass_total3 = document.getElementById("fin_ass_total3").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total3").value);
                var fin_ass_total4 = document.getElementById("fin_ass_total4").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total4").value);
                var fin_ass_total5 = document.getElementById("fin_ass_total5").value == '' ? 0 : parseFloat(document.getElementById("fin_ass_total5").value);

                var grand_sum = fin_ass_total1+fin_ass_total2+fin_ass_total3+fin_ass_total4+fin_ass_total5;

                document.getElementById("fin_ass_gdtotal").value = grand_sum.toFixed(2);

            });


        };
    </script>
        
    @endpush
    
@endsection
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
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form8 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link active" id="LLM-tab" data-bs-toggle="tab" data-bs-target="#LLM" type="button" role="tab" aria-controls="LLM" aria-selected="true">Loc. Level</button>
                        </li>

                        {{-- DISTRICT OFFICERS LEVEL QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form4 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="DLM-tab" data-bs-toggle="tab" data-bs-target="#DLM" type="button" role="tab" aria-controls="DLM" aria-selected="false">Dist. Level</button>
                        </li>

                        {{-- MEMBER QUESTIONNAIRE --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form9 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false">Member</button>
                        </li>

                        {{-- SUPERINTENDENT'S VISITATION REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form1 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="areahead-tab" data-bs-toggle="tab" data-bs-target="#areahead" type="button" role="tab" aria-controls="areahead" aria-selected="false">Area Head</button>
                        </li>

                        {{-- DISTRICT PASTOR'S VISITATION REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form6 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="distpast-tab" data-bs-toggle="tab" data-bs-target="#distpast" type="button" role="tab" aria-controls="distpast" aria-selected="false">Dist. Pastor</button>
                        </li>

                        {{-- COMMUNITY IMPRESSION  REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form3 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="commrep-tab" data-bs-toggle="tab" data-bs-target="#commrep" type="button" role="tab" aria-controls="commrep" aria-selected="false">Community</button>
                        </li>

                        {{-- LOCAL EVANGELISM --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form7 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="evange-tab" data-bs-toggle="tab" data-bs-target="#evange" type="button" role="tab" aria-controls="evange" aria-selected="false">Evangelism</button>
                        </li>

                        {{-- MONITOR'S  REPORT --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form10 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="monirep-tab" data-bs-toggle="tab" data-bs-target="#monirep" type="button" role="tab" aria-controls="monirep" aria-selected="false">Monitor's Rep.</button>
                        </li>

                        {{-- Growth Questionnaire --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form19 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="growth-tab" data-bs-toggle="tab" data-bs-target="#growth" type="button" role="tab" aria-controls="growth" aria-selected="false">Growth Quen.</button>
                        </li>

                        {{-- Attendance --}}
                        <li class="nav-item" role="presentation" <?php if (Auth()->user()->form21 == 0) echo 'style="display: none"' ?> >
                            <button class="nav-link" id="attn-tab" data-bs-toggle="tab" data-bs-target="#attn" type="button" role="tab" aria-controls="attn" aria-selected="false">Attendance</button>
                        </li>
                    </ul>


                    <div class="tab-content" id="myTabContent">
                        {{-- LOCAL LEVEL QUESTIONNAIRE --}}
                        <div class="tab-pane fade show active" id="LLM" role="tabcard" aria-labelledby="LLM-tab" <?php if (Auth()->user()->form8 == 0) echo 'style="display: none"' ?> >
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

                        {{-- LOCAL EVANGELISM --}}
                        <div class="tab-pane fade" id="evange" role="tabcard" aria-labelledby="evange-tab">
                            @include('forms.local_evangelism')
                        </div>

                        {{-- Growth Questionnaire --}}
                        <div class="tab-pane fade" id="growth" role="tabcard" aria-labelledby="growth-tab">
                            @include('forms.growth_questionnaire')
                        </div>

                        {{-- Attendance --}}
                        <div class="tab-pane fade" id="attn" role="tabcard" aria-labelledby="attn-tab">
                            @include('forms.attendance_analysis')
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
            $('#pastors1, #pastors2, #pastors3, #pastors4, #pastors5').bind('input',function(){

                // row calculation
                var pastors1 = Math.floor(document.getElementById("pastors1").value);;
                var pastors2 = Math.floor(document.getElementById("pastors2").value);
                var pastors3 = Math.floor(document.getElementById("pastors3").value);
                var pastors4 = Math.floor(document.getElementById("pastors4").value);
                var pastors5 = Math.floor(document.getElementById("pastors5").value);

                var sum = pastors1 + pastors2 + pastors3 + pastors4 + pastors5;

                document.getElementById("pastors_total").value = Math.floor(sum);

                // Adding the totals
                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#elders1, #elders2, #elders3, #elders4, #elders5').bind('input',function(){
                var pastors1 = Math.floor(document.getElementById("elders1").value);;
                var pastors2 = Math.floor(document.getElementById("elders2").value);
                var pastors3 = Math.floor(document.getElementById("elders3").value);
                var pastors4 = Math.floor(document.getElementById("elders4").value);
                var pastors5 = Math.floor(document.getElementById("elders5").value);

                var sum = pastors1 + pastors2 + pastors3 + pastors4 + pastors5;

                document.getElementById("elders_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#deacons1, #deacons2, #deacons3, #deacons4, #deacons5').bind('input',function(){
                var deacons1 = Math.floor(document.getElementById("deacons1").value);;
                var deacons2 = Math.floor(document.getElementById("deacons2").value);
                var deacons3 = Math.floor(document.getElementById("deacons3").value);
                var deacons4 = Math.floor(document.getElementById("deacons4").value);
                var deacons5 = Math.floor(document.getElementById("deacons5").value);

                var sum = deacons1 + deacons2 + deacons3 + deacons4 + deacons5;

                document.getElementById("deacons_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#deaconesses1, #deaconesses2, #deaconesses3, #deaconesses4, #deaconesses5').bind('input',function(){
                var deaconesses1 = Math.floor(document.getElementById("deaconesses1").value);;
                var deaconesses2 = Math.floor(document.getElementById("deaconesses2").value);
                var deaconesses3 = Math.floor(document.getElementById("deaconesses3").value);
                var deaconesses4 = Math.floor(document.getElementById("deaconesses4").value);
                var deaconesses5 = Math.floor(document.getElementById("deaconesses5").value);

                var sum = deaconesses1 + deaconesses2 + deaconesses3 + deaconesses4 + deaconesses5;

                document.getElementById("deaconesses_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#adult_males1, #adult_males2, #adult_males3, #adult_males4, #adult_males5').bind('input',function(){
                var adult_males1 = Math.floor(document.getElementById("adult_males1").value);;
                var adult_males2 = Math.floor(document.getElementById("adult_males2").value);
                var adult_males3 = Math.floor(document.getElementById("adult_males3").value);
                var adult_males4 = Math.floor(document.getElementById("adult_males4").value);
                var adult_males5 = Math.floor(document.getElementById("adult_males5").value);

                var sum = adult_males1 + adult_males2 + adult_males3 + adult_males4 + adult_males5;

                document.getElementById("adult_males_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#adult_females1, #adult_females2, #adult_females3, #adult_females4, #adult_females5').bind('input',function(){
                var adult_females1 = Math.floor(document.getElementById("adult_females1").value);;
                var adult_females2 = Math.floor(document.getElementById("adult_females2").value);
                var adult_females3 = Math.floor(document.getElementById("adult_females3").value);
                var adult_females4 = Math.floor(document.getElementById("adult_females4").value);
                var adult_females5 = Math.floor(document.getElementById("adult_females5").value);

                var sum = adult_females1 + adult_females2 + adult_females3 + adult_females4 + adult_females5;

                document.getElementById("adult_females_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#children1, #children2, #children3, #children4, #children5').bind('input',function(){
                var children1 = Math.floor(document.getElementById("children1").value);;
                var children2 = Math.floor(document.getElementById("children2").value);
                var children3 = Math.floor(document.getElementById("children3").value);
                var children4 = Math.floor(document.getElementById("children4").value);
                var children5 = Math.floor(document.getElementById("children5").value);

                var sum = children1 + children2 + children3 + children4 + children5;

                document.getElementById("children_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

            $('#youth1, #youth2, #youth3, #youth4, #youth5').bind('input',function(){
                var youth1 = Math.floor(document.getElementById("youth1").value);;
                var youth2 = Math.floor(document.getElementById("youth2").value);
                var youth3 = Math.floor(document.getElementById("youth3").value);
                var youth4 = Math.floor(document.getElementById("youth4").value);
                var youth5 = Math.floor(document.getElementById("youth5").value);

                var sum = youth1 + youth2 + youth3 + youth4 + youth5;

                document.getElementById("youth_total").value = Math.floor(sum);

                var pastors_total = Math.floor(document.getElementById("pastors_total").value);
                var elders_total = Math.floor(document.getElementById("elders_total").value);
                var deacons_total = Math.floor(document.getElementById("deacons_total").value);
                var deaconesses_total = Math.floor(document.getElementById("deaconesses_total").value);
                var adult_males_total = Math.floor(document.getElementById("adult_males_total").value);
                var adult_females_total = Math.floor(document.getElementById("adult_females_total").value);
                var children_total = Math.floor(document.getElementById("children_total").value);
                var youth_total = Math.floor(document.getElementById("youth_total").value);

                var grand_sum = pastors_total+elders_total+deacons_total+deaconesses_total+adult_males_total+adult_females_total+children_total+youth_total;

                document.getElementById("total_att").value = Math.floor(grand_sum);

                // Average total
                var attn_month = document.getElementById('attn_month').value;
                var attn_year = Math.floor(document.getElementById('attn_year').value);
                
                var week_number = weekCount(attn_year, getMonth(attn_month));
                if(week_number > 5){
                    week_number = 5;
                }

                var average_total = Math.floor(grand_sum) / Math.floor(week_number)
                document.getElementById("average_att").value = average_total;

                // Perfromance
                document.getElementById("att_perform").innerHTML = Math.floor(grand_sum) / average_total;
            });

        };
    </script>
        
    @endpush
    
@endsection
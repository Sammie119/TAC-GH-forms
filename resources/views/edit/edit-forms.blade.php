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
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @switch($form)
        @case('ATTENDANCE ANALYSIS')
            @include('forms.attendance_analysis')

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
            @break

        @case('GROWTH QUESTIONNAIRE')
            @include('forms.growth_questionnaire')
            @break

        @case('FINANCIAL ASSESSMENT')
            @include('forms.financial_assessment')

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
            @break
    
        @default
            <h1>No Form Available</h1>
    @endswitch
        
@endsection
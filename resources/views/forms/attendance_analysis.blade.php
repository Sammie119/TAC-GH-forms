<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center">
            @if (isset($data->attendance_id))
                <h4>EDIT - {{ $form }}</h4>
            @else
                <h4>ATTENDANCE ANALYSIS</h4> 
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('attendance_analysis') }}" id="attnonitor" method="POST">
                @csrf
                @isset($data->attendance_id)
                    <input type="hidden" name="id" value="{{ $data->attendance_id }}">
                @endisset
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="attn_district" placeholder="Name of District" value="{{ (isset($data->attendance_id)) ? $data->attn_district : '' }}" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Name of District</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                    <div class="col-sm-6"> 
                        <input name="attn_area" placeholder="Name of Area" value="{{ (isset($data->attendance_id)) ? $data->attn_area : '' }}" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Name of Area</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="attn_local" value="{{ (isset($data->attendance_id)) ? $data->attn_local : '' }}" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Name of Local Assembly</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                    <div class="col-sm-6"> 
                        <input name="attn_status" value="{{ (isset($data->attendance_id)) ? $data->attn_status : '' }}" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Interviewee Status</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <select name="attn_month" required id="attn_month" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            <option <?php echo (isset($data->attendance_id)) ? 'selected' : 'selected disabled'; ?> > <?php echo (isset($data->attendance_id)) ? $data->attn_month : 'Select Month';?> </option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Month</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                    <div class="col-sm-6"> 
                        <select name="attn_year" required id="attn_year" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                            <option <?php echo (isset($data->attendance_id)) ? 'selected' : 'selected disabled'; ?> > <?php echo (isset($data->attendance_id)) ? $data->attn_year : 'Select Year';?> </option>
                            <?php 
                               for($i = 2018 ; $i <= date('Y'); $i++){
                                  echo "<option>$i</option>";
                               }
                            ?>
                        </select>
                        @if(isset($data->attendance_id))
                            <small class="d-flex justify-content-center mb-4">Year</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                </div>
                <table class="table" style="font-size: 1.2rem">
                    
                    <thead>
                        <tr>
                            <th colspan="8" style="text-align: center">ATTENDANCE REPORT</th> 
                        </tr>
                        <tr style="text-align: center">
                            <th>Category</th>
                            <th>Week 1</th>
                            <th>Week 2</th>
                            <th>Week 3</th>
                            <th>Week 4</th>
                            <th>Week 5</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pastors</td>
                            <td><input type="number" step="1" min="0" id="pastors1" value="{{ (isset($data->attendance_id)) ? $data->pastors1 : '' }}" name="pastors1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="pastors2" value="{{ (isset($data->attendance_id)) ? $data->pastors2 : '' }}" name="pastors2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="pastors3" value="{{ (isset($data->attendance_id)) ? $data->pastors3 : '' }}" name="pastors3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="pastors4" value="{{ (isset($data->attendance_id)) ? $data->pastors4 : '' }}" name="pastors4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="pastors5" value="{{ (isset($data->attendance_id)) ? $data->pastors5 : '' }}" name="pastors5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="pastors_total" value="{{ (isset($data->attendance_id)) ? $data->pastors_total : '' }}" name="pastors_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Elders</td>
                            <td><input type="number" step="1" min="0" id="elders1" value="{{ (isset($data->attendance_id)) ? $data->elders1 : '' }}" name="elders1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="elders2" value="{{ (isset($data->attendance_id)) ? $data->elders2 : '' }}" name="elders2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="elders3" value="{{ (isset($data->attendance_id)) ? $data->elders3 : '' }}" name="elders3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="elders4" value="{{ (isset($data->attendance_id)) ? $data->elders4 : '' }}" name="elders4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="elders5" value="{{ (isset($data->attendance_id)) ? $data->elders5 : '' }}" name="elders5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="elders_total" value="{{ (isset($data->attendance_id)) ? $data->elders_total : '' }}" name="elders_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Deacons</td>
                            <td><input type="number" step="1" min="0" id="deacons1" value="{{ (isset($data->attendance_id)) ? $data->deacons1 : '' }}" name="deacons1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deacons2" value="{{ (isset($data->attendance_id)) ? $data->deacons2 : '' }}" name="deacons2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deacons3" value="{{ (isset($data->attendance_id)) ? $data->deacons3 : '' }}" name="deacons3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deacons4" value="{{ (isset($data->attendance_id)) ? $data->deacons4 : '' }}" name="deacons4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deacons5" value="{{ (isset($data->attendance_id)) ? $data->deacons5 : '' }}" name="deacons5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="deacons_total" value="{{ (isset($data->attendance_id)) ? $data->deacons_total : '' }}" name="deacons_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Deaconesses</td>
                            <td><input type="number" step="1" min="0" id="deaconesses1" value="{{ (isset($data->attendance_id)) ? $data->deaconesses1 : '' }}" name="deaconesses1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deaconesses2" value="{{ (isset($data->attendance_id)) ? $data->deaconesses2 : '' }}" name="deaconesses2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deaconesses3" value="{{ (isset($data->attendance_id)) ? $data->deaconesses3 : '' }}" name="deaconesses3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deaconesses4" value="{{ (isset($data->attendance_id)) ? $data->deaconesses4 : '' }}" name="deaconesses4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="deaconesses5" value="{{ (isset($data->attendance_id)) ? $data->deaconesses5 : '' }}" name="deaconesses5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="deaconesses_total" value="{{ (isset($data->attendance_id)) ? $data->deaconesses_total : '' }}" name="deaconesses_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Adult Males</td>
                            <td><input type="number" step="1" min="0" id="adult_males1" value="{{ (isset($data->attendance_id)) ? $data->adult_males1 : '' }}" name="adult_males1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_males2" value="{{ (isset($data->attendance_id)) ? $data->adult_males2 : '' }}" name="adult_males2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_males3" value="{{ (isset($data->attendance_id)) ? $data->adult_males3 : '' }}" name="adult_males3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_males4" value="{{ (isset($data->attendance_id)) ? $data->adult_males4 : '' }}" name="adult_males4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_males5" value="{{ (isset($data->attendance_id)) ? $data->adult_males5 : '' }}" name="adult_males5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="adult_males_total" value="{{ (isset($data->attendance_id)) ? $data->adult_males_total : '' }}" name="adult_males_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td nowrap>Adult Females</td>
                            <td><input type="number" step="1" min="0" id="adult_females1" value="{{ (isset($data->attendance_id)) ? $data->adult_females1 : '' }}" name="adult_females1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_females2" value="{{ (isset($data->attendance_id)) ? $data->adult_females2 : '' }}" name="adult_females2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_females3" value="{{ (isset($data->attendance_id)) ? $data->adult_females3 : '' }}" name="adult_females3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_females4" value="{{ (isset($data->attendance_id)) ? $data->adult_females4 : '' }}" name="adult_females4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="adult_females5" value="{{ (isset($data->attendance_id)) ? $data->adult_females5 : '' }}" name="adult_females5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="adult_females_total" value="{{ (isset($data->attendance_id)) ? $data->adult_females_total : '' }}" name="adult_females_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Children</td>
                            <td><input type="number" step="1" min="0" id="children1" value="{{ (isset($data->attendance_id)) ? $data->children1 : '' }}" name="children1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="children2" value="{{ (isset($data->attendance_id)) ? $data->children2 : '' }}" name="children2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="children3" value="{{ (isset($data->attendance_id)) ? $data->children3 : '' }}" name="children3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="children4" value="{{ (isset($data->attendance_id)) ? $data->children4 : '' }}" name="children4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="children5" value="{{ (isset($data->attendance_id)) ? $data->children5 : '' }}" name="children5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="children_total" value="{{ (isset($data->attendance_id)) ? $data->children_total : '' }}" name="children_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td>Youth</td>
                            <td><input type="number" step="1" min="0" id="youth1" value="{{ (isset($data->attendance_id)) ? $data->youth1 : '' }}" name="youth1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="youth2" value="{{ (isset($data->attendance_id)) ? $data->youth2 : '' }}" name="youth2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="youth3" value="{{ (isset($data->attendance_id)) ? $data->youth3 : '' }}" name="youth3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="youth4" value="{{ (isset($data->attendance_id)) ? $data->youth4 : '' }}" name="youth4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="1" min="0" id="youth5" value="{{ (isset($data->attendance_id)) ? $data->youth5 : '' }}" name="youth5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="youth_total" value="{{ (isset($data->attendance_id)) ? $data->youth_total : '' }}" name="youth_total" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr style="text-align: right">
                            <th>Total</th>
                            <th id="total1"></th>
                            <th id="total2"></th>
                            <th id="total3"></th>
                            <th id="total4"></th>
                            <th colspan="2"><input type="text" readonly id="total_att" name="total_att" value="{{ (isset($data->attendance_id)) ? $data->total_att : '' }}" class="form-control" style="font-family:Arial, FontAwesome"></th>
                        </tr>
                        <tr>
                            <th colspan="5" style="text-align: center" >Average Attendace</th>
                            <th colspan="2" style="text-align: right"><input type="text" readonly id="average_att" name="average_att" value="{{ (isset($data->attendance_id)) ? $data->average_att : '' }}" class="form-control" style="font-family:Arial, FontAwesome"></th>
                        </tr>
                        <tr>
                            <th colspan="5" style="text-align: center" >Attendance Performance</th>
                            <th colspan="2" style="text-align: right" id="att_perform"></th>
                        </tr>
                    </tfoot>
                </table>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
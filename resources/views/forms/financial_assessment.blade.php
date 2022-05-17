<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center">
            @if (isset($data->financial_id))
                <h4>EDIT - {{ $form }}</h4>
            @else
                <h4>FINANCIAL ASSESSMENT</h4>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('financial_assessment') }}" id="fin_assonitor" method="POST">
                @csrf
                @isset($data->financial_id)
                    <input type="hidden" name="id" value="{{ $data->financial_id }}">
                @endisset
                <div class="row">
                    <div class="col-sm-6">
                        <input name="fin_ass_district" value="{{ (isset($data->financial_id)) ? $data->fin_ass_district : '' }}" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Name of District</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                    <div class="col-sm-6">
                        <input name="fin_ass_area" value="{{ (isset($data->financial_id)) ? $data->fin_ass_area : '' }}" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">  
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Name of Area</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="fin_ass_local" value="{{ (isset($data->financial_id)) ? $data->fin_ass_local : '' }}" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Name of Local Assembly</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif  
                    </div>
                    <div class="col-sm-6"> 
                        <input name="fin_ass_status" value="{{ (isset($data->financial_id)) ? $data->fin_ass_status : '' }}" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Interviewee Status</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <select name="fin_ass_month" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            <option <?php echo (isset($data->financial_id)) ? 'selected' : 'selected disabled'; ?> > <?php echo (isset($data->financial_id)) ? $data->fin_ass_month : 'Select Month';?> </option>
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
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Month</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                    <div class="col-sm-6"> 
                        <select name="fin_ass_year" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                            <option <?php echo (isset($data->financial_id)) ? 'selected' : 'selected disabled'; ?> > <?php echo (isset($data->financial_id)) ? $data->fin_ass_year : 'Select Year';?> </option>
                            <?php 
                               for($i = 2018 ; $i <= date('Y'); $i++){
                                  echo "<option>$i</option>";
                               }
                            ?>
                        </select> 
                        @if(isset($data->financial_id))
                            <small class="d-flex justify-content-center mb-4">Year</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                </div>
                <table class="table" style="font-size: 1.2rem; text-align: center;">
                    
                    <thead>
                        <tr>
                            <th colspan="5" style="text-align: center">FINANCIAL EVALUATION</th> 
                        </tr>
                        <tr>
                            <th>Weeks</th>
                            <th>Tithes</th>
                            <th>Offering</th>
                            <th>Others</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td nowrap>Week 1</td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_tithe1" value="{{ (isset($data->financial_id)) ? $data->fin_ass_tithe1 : '' }}" name="fin_ass_tithe1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_offering1" value="{{ (isset($data->financial_id)) ? $data->fin_ass_offering1 : '' }}" name="fin_ass_offering1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_others1" value="{{ (isset($data->financial_id)) ? $data->fin_ass_others1 : '' }}" name="fin_ass_others1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="fin_ass_total1" value="{{ (isset($data->financial_id)) ? $data->fin_ass_total1 : '' }}" name="fin_ass_total1" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td nowrap>Week 2</td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_tithe2" value="{{ (isset($data->financial_id)) ? $data->fin_ass_tithe2 : '' }}" name="fin_ass_tithe2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_offering2" value="{{ (isset($data->financial_id)) ? $data->fin_ass_offering2 : '' }}" name="fin_ass_offering2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_others2" value="{{ (isset($data->financial_id)) ? $data->fin_ass_others2 : '' }}" name="fin_ass_others2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="fin_ass_total2" value="{{ (isset($data->financial_id)) ? $data->fin_ass_total2 : '' }}" name="fin_ass_total2" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td nowrap>Week 3</td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_tithe3" value="{{ (isset($data->financial_id)) ? $data->fin_ass_tithe3 : '' }}" name="fin_ass_tithe3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_offering3" value="{{ (isset($data->financial_id)) ? $data->fin_ass_offering3 : '' }}" name="fin_ass_offering3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_others3" value="{{ (isset($data->financial_id)) ? $data->fin_ass_others3 : '' }}" name="fin_ass_others3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="fin_ass_total3" value="{{ (isset($data->financial_id)) ? $data->fin_ass_total3 : '' }}" name="fin_ass_total3" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td nowrap>Week 4</td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_tithe4" value="{{ (isset($data->financial_id)) ? $data->fin_ass_tithe4 : '' }}" name="fin_ass_tithe4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_offering4" value="{{ (isset($data->financial_id)) ? $data->fin_ass_offering4 : '' }}" name="fin_ass_offering4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_others4" value="{{ (isset($data->financial_id)) ? $data->fin_ass_others4 : '' }}" name="fin_ass_others4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="fin_ass_total4" value="{{ (isset($data->financial_id)) ? $data->fin_ass_total4 : '' }}" name="fin_ass_total4" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                        <tr>
                            <td nowrap>Week 5</td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_tithe5" value="{{ (isset($data->financial_id)) ? $data->fin_ass_tithe5 : '' }}" name="fin_ass_tithe5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_offering5" value="{{ (isset($data->financial_id)) ? $data->fin_ass_offering5 : '' }}" name="fin_ass_offering5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="number" step="0.01" min="0" id="fin_ass_others5" value="{{ (isset($data->financial_id)) ? $data->fin_ass_others5 : '' }}" name="fin_ass_others5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                            <td><input type="text" readonly id="fin_ass_total5" value="{{ (isset($data->financial_id)) ? $data->fin_ass_total5 : '' }}" name="fin_ass_total5" class="form-control" style="font-family:Arial, FontAwesome"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th id="total1"></th>
                            <th id="total2"></th>
                            <th colspan="2"><input type="text" readonly id="fin_ass_gdtotal" value="{{ (isset($data->financial_id)) ? $data->fin_ass_gdtotal : '' }}" name="fin_ass_gdtotal" class="form-control" style="font-family:Arial, FontAwesome"></th>
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
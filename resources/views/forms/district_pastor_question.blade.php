<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTORS' DIRECT QUESTIONNAIRE</h4></div>
        <div class="card-body">
            <form action="{{ route('district-past-question') }}" id="pastorquesonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> <input name="pastorques_name" required placeholder="Name of Area Sup" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-3" style="text-align: center"> 
                        <input name="pastorques_dob" required placeholder="Date of Birth" max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        <small>Date of Birth</small>
                    </div>
                    <div class="col-sm-3"> <input name="pastorques_year" required placeholder="Year of Call" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-3" style="text-align: center"> 
                        <input name="pastorques_stay_length" required placeholder="Length of Stay at Current Station" title="Length of Stay at Current Station" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                    </div>
                    <div class="col-sm-3"> 
                        <select name="pastorques_wife" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            <option value="" disabled selected>Is your wife with you at Station?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-sm-2"> <input name="pastorques_children" required placeholder="Number of Children" title="Number of Children" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-2"> <input name="pastorques_child_age" required placeholder="Age of last Child" title="Age of last Child" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-2"> <input name="pastorques_child_station" required placeholder="How many of your children are with you at your station" title="How many of your children are with you at your station" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How have you been received by the officers of the church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How have you been received by the members of the church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What is your assessment of the progress of the work so far?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any ongoing projects? Please briefly describe them and indicate their state of progress.</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you encountering any difficulties in your station? Please describe them. </label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any challenges that need General HQ attention? Please state them.</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you receiving encouragement and guidance from the Area Superintendent?  You may give details in if any.</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What challenges do you see in the Area?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How often does the Area Superintendent visit your District?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment10" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How frequent are the Area Pastorate meetings?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment11" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is there an ongoing Area project you are aware of?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment12" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How frequent are Area programmes?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment13" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there ongoing capacity building programmes at the Area level?</label>
                        </div>
                        <div class="mb">
                            <textarea form="pastorquesonitor" class="form-control" name="pastorques_comment14" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                </ol>
                <div class="row">
                    <div class="col-sm-12"> <input name="pastorques_name_dist" placeholder="Name of District Pastor" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
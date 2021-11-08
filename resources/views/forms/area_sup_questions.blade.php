<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE</h4></div>
        <div class="card-body">
            <form action="{{ route('area-sup-question') }}" id="areasupqonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> <input name="areasupq_name" required placeholder="Name of Area Superintendent" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-3" style="text-align: center"> 
                        <input name="areasupq_dob" required placeholder="Date of Birth" max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        <small>Date of Birth</small>
                    </div>
                    <div class="col-sm-3"> <input name="areasupq_year" required placeholder="Year of Call" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-3" style="text-align: center"> 
                        <input name="areasupq_date_of_report" required placeholder="Date of Birth" max="<?php echo date('Y-m-d'); ?>" type="date" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        <small>Date of reporitng at Current Station</small>
                    </div>
                    <div class="col-sm-3"> 
                        <select name="areasupq_wife" required id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                            <option value="" disabled selected>Is your wife with you at Station?</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-sm-3"> <input name="areasupq_children" required placeholder="Number of Children" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-3"> <input name="areasupq_child_age" required placeholder="Age of last Child" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you compare current membership against membership at your resumption of duty</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How have you been received by the officers of the church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How have you been received by the members of the church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What is your assessment of the progress of the work of ministry so far?</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any ongoing projects? Please briefly describe them and indicate their state of progress.</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you encountering any difficulties in your station? Please describe them. </label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How are you addressing these difficulties in your Districts/Area Level?</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What Challenges are you facing for which you will need Head Office support.</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are your District Pastors cooperating with you?  You may give details if any.</label>
                        </div>
                        <div class="mb">
                            <textarea form="areasupqonitor" class="form-control" name="areasupq_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                </ol>
                <div class="row">
                    <div class="col-sm-12"> <input name="areasupq_name_sup" placeholder="Name of Area Superintendent" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
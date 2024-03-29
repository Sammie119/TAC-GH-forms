<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>AREA SUPERINTENDENT'S ASSESSMENT QUESTIONNAIRE</h4></div>
        <div class="card-body">
            <form action="{{ route('supassesstment') }}" id="sup_assonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input name="sup_ass_district" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">
                    </div>
                    <div class="col-sm-6">
                        <input name="sup_ass_area" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input name="sup_ass_local" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">  
                    </div>
                    <div class="col-sm-6"> <input name="sup_ass_name" required placeholder="Interviewee Name" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty of your Area Superintendent?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How have you received your Area Superintendent?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What is your assessment of the progress of the Area Superintendent's work so far?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any ongoing projects? Please describe them and indicate their state of progress.</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you aware of any difficulties of your Area Superintendent? Please describe them. </label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any challenges that need General HQ attention? Please state them.</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you receiving encouragement and guidance from your Pastor?  You may give details in if any.</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What challenges do you see in the Area?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How frequent is the Area Superintendent visit?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How frequent is the Area Pastorate meetings?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment10" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is there an ongoing project?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment11" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How frequent are Area programmes?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment12" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are the ongoing capacity building programmes?</label>
                        </div>
                        <div class="mb">
                            <textarea form="sup_assonitor" class="form-control" name="sup_ass_comment13" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                </ol>
                
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
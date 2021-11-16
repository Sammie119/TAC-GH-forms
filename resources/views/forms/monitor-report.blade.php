<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>MONITOR'S  REPORT</h4></div>
        <div class="card-body">
            <form action="{{ route('monitor-report') }}" id="monireponitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> <input name="monirep_district" required placeholder="Name of District" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="monirep_area" required placeholder="Area" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> <input name="monirep_local" required placeholder="Local Assembly" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="monirep_status" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you describe the quality of the church environment in terms of cleanliness?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="monirep_question1" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question1" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question1" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is there a service for children and youth?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="monirep_question2" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question2" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question2" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you describe the place of meeting for the Children and Youth?</label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you describe the quality of the services for the Children and Youth?</label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are members coming to church services early enough?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="monirep_question5" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question5" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question5" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do late comers exhbit a sense of urgency in coming to church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="monirep_question6" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question6" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="monirep_question6" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How would you rate each of these components of the service? Give your brief comments.</label>
                        </div>
                        <ol type = "a">
                            <li>
                                <div class="">
                                    <label for="" class="form-label">Praise and Worship</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question7" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question7" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question7" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question7" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question7" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="">
                                    <label for="" class="form-label">Word Ministration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question8" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question8" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question8" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question8" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question8" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="">
                                    <label for="" class="form-label">Order and Decency</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question9" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question9" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question9" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question9" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question9" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="">
                                    <label for="" class="form-label">Prayer Session</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question10" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question10" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question10" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question10" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question10" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="">
                                    <label for="" class="form-label">Tithes/Offerings</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question11" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question11" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question11" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question11" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question11" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">The environment and status of the place of Worship (whether permanent and completed temple, classroom, shed, private residence, etc)</label>
                        </div>
                        <ol type = "a">
                            <li>
                                <div class="">
                                    <label for="" class="form-label">Signboards leading to the venue?</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="monirep_question12" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question12" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question12" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question12" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="monirep_question12" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>

                            <li>
                                <div class="">
                                    <label for="" class="form-label">What is the nature of the worship center?</label>
                                </div>
                                <div class="mb">
                                    <textarea form="monireponitor" class="form-control" name="monirep_comment13" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are your general impressions of and comments on the operations of the local church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="monireponitor" class="form-control" name="monirep_comment14" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <hr>
                        <div>
                            
                        </div>
                    <h3>Statistics for the Day</h3>
                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Attendance Report</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="monirep_pastors" required placeholder="Pastors" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="monirep_elders" required placeholder="Elders" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="monirep_deacons" required placeholder="Deacons" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="monirep_deaconesses" required placeholder="Deaconesses" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="monirep_adult_males" required placeholder="Adult Males" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="monirep_adult_females" required placeholder="Adult Females" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="monirep_children" required placeholder="Children" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="monirep_youth" required placeholder="Youth" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="monirep_total_att" required placeholder="Total Attendance for the day" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            
                        </div>
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Finance Report</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="monirep_tithe_payers" required placeholder="Number of Tithe Payers for the day" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="monirep_tithes_paid" required placeholder="Amount of Tithes paid" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="monirep_oferring" required placeholder="Thanksgiving Offering" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="monirep_total_tithe_off" required placeholder="Total Tithes and Thanksgiving Offering" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
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
<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTOR'S VISITATION REPORT</h4></div>
        <div class="card-body">
            <form action="{{ route('district-past-report') }}" id="distpastonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> <input name="distpast_district" required placeholder="Name of District" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="distpast_area" required placeholder="Area" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> <input name="distpast_local" required placeholder="Local Assembly" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="distpast_status" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">List the Locals in the District</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment1" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Provide the names of all the Presiding Elders/Officers in the District</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment2" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Which Local have you visited most recently</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What was your main assignment for the visit? (Regular Ministration, Funeral Service, Ordination Service etc)</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Were there any prophecies during the service? If so, please give a brief highlight of the prophecies.</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment5" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Quality of the Church Service. How would you rate each of these components of the service?</label>
                        </div>
                        <ul type = "disc">
                            <li>
                                <div class="">
                                    <label for="" class="form-label">Praise and Worship</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="distpast_question6" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question6" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question6" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question6" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question6" value="Very Poor">
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
                                    <input class="form-check-input" type="radio" required name="distpast_question7" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question7" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question7" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question7" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question7" value="Very Poor">
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
                                    <input class="form-check-input" type="radio" required name="distpast_question8" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question8" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question8" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question8" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question8" value="Very Poor">
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
                                    <input class="form-check-input" type="radio" required name="distpast_question9" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question9" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question9" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question9" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question9" value="Very Poor">
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
                                    <input class="form-check-input" type="radio" required name="distpast_question10" value="Very Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question10" value="Good">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Good
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question10" value="Average">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question10" value="Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Poor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="distpast_question10" value="Very Poor">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Very Poor
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Your assesment of the congregations' receptiveness to the word ministration</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="distpast_question11" value="Very Good">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Very Good
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question11" value="Good">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Good
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question11" value="Average">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Average
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question11" value="Poor">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Poor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question11" value="Very Poor">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Very Poor
                            </label>
                        </div>    
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">The cleanliness and arrangement of the Place of Worship</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="distpast_question12" value="Very Good">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Very Good
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question12" value="Good">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Good
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question12" value="Average">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Average
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question12" value="Poor">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Poor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question12" value="Very Poor">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Very Poor
                            </label>
                        </div>    
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Are there signboards directing people to the places of worship?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="distpast_question13" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question13" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distpast_question13" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment13" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Are there any praise reports for this local assembly? Please share.</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment14" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are there any issues that will require General Headquarters attention?</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment15" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are your general impressions of and comments on the local church?</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment16" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What methods do you have for Evangelism / Soul Winning</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment17" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How regularly is Evangelism Done</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment18" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you have an on going Discipleship/ New Convert classes?</label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment19" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are the existing structures for raising leaders </label>
                        </div>
                        <div class="mb">
                            <textarea form="distpastonitor" class="form-control" name="distpast_comment20" rows="3" placeholder="Details/Comments if any..."></textarea>
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
                            <div class="col-sm-4"> <input name="distpast_pastors" required placeholder="Pastors" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="distpast_elders" required placeholder="Elders" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="distpast_deacons" required placeholder="Deacons" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="distpast_deaconesses" required placeholder="Deaconesses" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="distpast_adult_males" required placeholder="Adult Males" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="distpast_adult_females" required placeholder="Adult Females" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <input name="distpast_children" required placeholder="Children" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            <div class="col-sm-4"> <input name="distpast_youth" required placeholder="Youth" type="number" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_total_att" required placeholder="Total Attendance for the day" type="number" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                            
                        </div>
                    </li>

                    <li>
                        <div class="mt-3"> 
                            <label for="" class="form-label">Finance Report</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_tithe_payers" required placeholder="Number of Tithe Payers for the day" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_active_tithe_payers" required placeholder="Number of active tithe payers" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_officers_tithe_payers" required placeholder="Number of officers paying tithe" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_tithes_paid" required placeholder="Amount of Tithes paid" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_oferring" required placeholder="Thanksgiving Offering" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_any_oferring" required placeholder="Any other offering" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"> <input name="distpast_total_tithe_off" required placeholder="Total Tithes and Thanksgiving Offering" type="number" step="0.01" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        </div>
                    </li>

                    <div class="row mt-4">
                        <div class="col-sm-6"> <input name="distpast_pastor" required placeholder="Name of District Pastor" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                        <div class="col-sm-6"> <input name="distpast_p_elder" required placeholder="Name of Presiding Elder / Local Pastor" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                    </div>
                </ol>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>LOCAL LEVEL QUESTIONNAIRE</h4></div>
        <div class="card-body">
            <form action="{{ route('local-level') }}" id="llmonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input name="llm_district" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                        <datalist id="districtOptions">
                            @forelse (Cache::get('churches')->where('status', 2) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist>
                    </div>
                    <div class="col-sm-6">
                        <input name="llm_area" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                        <datalist id="areaOptions"> 
                            @forelse (Cache::get('churches')->where('status', 1) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input name="llm_local" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                        <datalist id="localOptions"> 
                            @forelse (Cache::get('churches')->where('status', 3) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist>  
                    </div>
                    <div class="col-sm-6"> <input name="llm_status" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                {{-- <div class="mb"> 
                    <label for="exampleFormControlInput1" class="form-label">Does the District leadership raise funds as prescribed by the Headquaters?</label>
                    <input placeholder="Departing" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                </div> --}}
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Does the leadership raise funds as prescribed by the Headquatrers?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"required name="llm_question1" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question1" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question1" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do Church Services last beyond the average two hour service duration?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question2" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question2" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question2" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are prayer meetings decent and devoid of unbiblical practices?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question3" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question3" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question3" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do movement leaders attend Presbytery meetings?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question4" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question4" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question4" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are Children and Youth ministries encouraged and flourishing?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question5" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question5" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question5" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is the leadership recognising and encouraging Women in Ministry?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question6" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question6" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question6" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do members come to church service with expectation?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question7" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question7" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question7" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is the power of the Holy Spirit present at church services?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question8" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question8" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question8" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are members and officers respectful of leadership?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question9" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question9" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question9" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do members attend evening services?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question10" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question10" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question10" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment10" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do presbyters attend evening services?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question11" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question11" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question11" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment11" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are the members over-burdened with appeal for funds?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question12" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question12" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question12" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment12" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you think there is love among members in the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question13" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question13" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question13" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment13" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you think Leadership is working to promote love among members?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question14" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question14" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question14" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment14" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are members happy and eager to invite friends to church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question15" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question15" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question15" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment15" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do church leaders visit members?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question16" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question16" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question16" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment16" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are leaders living holy lives in the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question17" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question17" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question17" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment17" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is there holiness among members of the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question18" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question18" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question18" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment18" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do leadership teach about giving and allow members to give in faith without coersion?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question19" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question19" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question19" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment19" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are National Circulars read to the understanding of members?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question20" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question20" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question20" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment20" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you have frequent District United Services?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question21" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question21" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question21" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment21" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Have you  closed your church on Sundays for District or Area United Services more than three times in a year?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="llm_question22" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question22" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="llm_question22" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="llmonitor" class="form-control" name="llm_comment22" rows="2" placeholder="Details/Comments if any..."></textarea>
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
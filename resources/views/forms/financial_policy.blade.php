<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>FINANCIAL POLICY</h4></div>
        <div class="card-body">
            <form action="{{ route('financial-policy') }}" id="fin_eva_aonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="fin_eva_a_area" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                        <datalist id="areaOptions"> 
                            @forelse (Cache::get('churches')->where('status', 1) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist>  
                    </div>
                    <div class="col-sm-6">
                        <input name="fin_eva_a_district" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">  
                        <datalist id="districtOptions"> 
                            @forelse (Cache::get('churches')->where('status', 2) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="fin_eva_a_local" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                        <datalist id="localOptions"> 
                            @forelse (Cache::get('churches')->where('status', 3) as $district)
                                <option>{{ $district->dropdown_name }}</option>
                            @empty
                                <option>No data found</option>
                            @endforelse
                        </datalist> 
                    </div>
                    <div class="col-sm-6"> <input name="fin_eva_a_moniter" required placeholder="Monitor's Name" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>    
                        <label for="" class="form-label">Composition of Finance Committee</label>
                        
                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Appointment</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1a" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1a" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1a" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Number (min of 3, max of 5 or 7)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1b" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1b" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1b" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Term of Office (2 or 4 years renewable for 2 terms)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1c" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1c" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1c" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Positions</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1d" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1d" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1d" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Participation in Presbytery meetings (Constitution)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1e" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1e" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1e" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1e" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Signatories</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1f" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1f" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1f" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1f" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Discharge of Duties</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question1g" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1g" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question1g" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment1g" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li> 
                    
                    <li>
                        <label for="" class="form-label">Budgets</label>

                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Availability</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question2a" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2a" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2a" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Minutes on rectification / approval process</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question2b" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2b" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2b" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Budget evaluation</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question2c" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2c" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question2c" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment2c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Sources of funds</label>

                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Tithe (how often is it raised?)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3a" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3a" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3a" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Thanksgiving</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3b" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3b" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3b" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Donations, Gifts and Appeal for funds</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3c" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3c" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3c" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Dues</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3d" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3d" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3d" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Sale of Souvenirs</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3e" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3e" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3e" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3e" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Movement Meeting Proceeds and Programmes</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3f" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3f" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3f" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3f" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Fund raisings / annual harvests / project funds</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3g" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3g" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3g" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3g" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Week Celebrations</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3h" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3h" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3h" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3h" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">National Special Programmes e.g. 21 days</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question3i" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3i" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question3i" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment3i" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Revenue Monitoring</label>

                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Tithes and Thanksgiving: How is remittance closed?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question4a" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question4a" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question4a" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Is it tithes and offering or tithe and thanksgiving?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">What is the status of remittances</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">tithes and thanksgiving</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c1" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">week celebrations</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c2" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">conventions</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4c3" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <label for="" class="form-label">How are appeals raised? - Review from Spot check if any</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">How are donations received and utilised?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4e" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">How is the recording process for all income lines?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment4f" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Expenditure</label>

                        <ol type="a">
                            <li>
                                <label for="" class="form-label">How is expenditure approval process followed?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">What has been the reaction of recipients of cashflows on</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">Disbursements from imprest</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b1" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">Disbursements from income received after service</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b2" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">Overspending of budget</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b3" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">Expenditure review / request for supporting documents</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5b4" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <label for="" class="form-label">How is the imprest system operated?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment5c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Custody of Funds</label>
                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Is MOMO operational at the assembly?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question6a" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6a" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6a" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">How is it operated and monitored?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">How are funds kept</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">at the bank?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question6c1" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question6c1" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c1" rows="2" placeholder="If at bank or yes, how is banking performed?"></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">with the treasurer?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question6c2" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question6c2" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c2" rows="2" placeholder="If with treasurer or yes, how is it monitored?"></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">How are direct deposits by members accounted for?</label>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6c3" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <label for="" class="form-label">Does movements keep their funds?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question6d" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6d" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6d" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Is the signatory policy complied with?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question6e" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6e" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question6e" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment6e" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Allowances For Ministers</label>
                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Out of Station / Honourarium</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">Both paid by Area, District and Local visited</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7a1" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7a1" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7a1" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7a1" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">Beneficiary Obligation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7a2" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7a2" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7a2" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7a2" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <label for="" class="form-label">Car / Maintenance</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">Beneficiary obligation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7b1" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b1" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b1" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b1" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">As part of allowances</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7b2" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b2" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b2" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b2" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>

                                    <li>
                                        <label for="" class="form-label">Both as allowances and contribution as beneficiary obligation</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7b3" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b3" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7b3" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7b3" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            
                            <li>
                                <label for="" class="form-label">Transportation</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">Beneficiary obligation compliance</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7c" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7c" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7c" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            
                            <li>
                                <label for="" class="form-label">Responsibility</label>
                                <ol>
                                    <li>
                                        <label for="" class="form-label">Paid by HQ</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" required name="fin_eva_a_question7d" value="Yes">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7d" value="No">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="fin_eva_a_question7d" value="Somehow">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Somehow
                                            </label>
                                        </div>
                                        <div class="mb">
                                            <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment7d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>

                    <li>
                        <label for="" class="form-label">Welfare</label>
                        <ol type="a">
                            <li>
                                <label for="" class="form-label">Does the assembly operate a welfare scheme?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8a" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">How is the welfare process carried out?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8b" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>  
                            </li>

                            <li>
                                <label for="" class="form-label">Is there a committee responsible for the welfare scheme?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question8c" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question8c" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question8c" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8c" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Does the welfare scheme operate a separate bank account?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="fin_eva_a_question8d" value="Yes">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question8d" value="No">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fin_eva_a_question8d" value="Somehow">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Somehow
                                    </label>
                                </div>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8d" rows="2" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">Who are the signatories to the Welfare Scheme account?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8e" rows="3" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="" class="form-label">What are the challenges of the welfare scheme?</label>
                                <div class="mb">
                                    <textarea form="fin_eva_aonitor" class="form-control" name="fin_eva_a_comment8f" rows="3" placeholder="Details/Comments if any..."></textarea>
                                </div>
                            </li>
                        </ol>
                    </li>
                </ol>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
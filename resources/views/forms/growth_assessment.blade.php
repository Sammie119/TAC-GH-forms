<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>GROWTH ASSESSMENT</h4></div>
        <div class="card-body">
            {{-- <form action="#" id="growthassonitor" method="POST">
                @csrf
                <div class="row">
                    <div class="row">
                    <div class="col-sm-6"> 
                        <input name="growthque_district" value="{{ (isset($data->growth_id)) ? $data->growthque_district : '' }}" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">
                    </div>
                    <div class="col-sm-6"> 
                        <input name="growthque_area" value="{{ (isset($data->growth_id)) ? $data->growthque_area : '' }}" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="growthque_local" value="{{ (isset($data->growth_id)) ? $data->growthque_local : '' }}" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">   
                    </div>
                    <div class="col-sm-6"> <input name="growthque_status" value="{{ (isset($data->growth_id)) ? $data->growthque_status : '' }}" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How long have you lived in this community?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question1" value="0 - 5 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                0 - 5 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question1" value="6 - 10 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                6 - 10 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question1" value="11 - 20 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                11 - 20 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question1" value="above 20 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                above 20 years
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How long have you known The Apostolic Church-Ghana?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question2" value="0 - 5 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                0 - 5 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question2" value="6 - 10 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                6 - 10 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question2" value="11 - 20 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                11 - 20 years
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question2" value="above 20 years">
                            <label class="form-check-label" for="flexRadioDefault1">
                                above 20 years
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you know any member(s) of the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question3" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question3" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question3" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you a friend of any member(s) of the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question4" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question4" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question4" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Have you ever visited the church before? If yes, what took you there?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question5" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question5" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question5" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has the activities of the church been a bother to you or the community before? If yes, please explain.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question6" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question6" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question6" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has the church been a blessing to you or the community? If yes, please explain.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question7" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question7" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question7" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has any member ever witnessed to you or invited you to church before?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question8" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question8" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question8" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you a Christian? If yes, where do you fellowship?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question9" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question9" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question9" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">If you have to choose a new place of worship, would you choose The Apostolic Church (in your community)?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthass_question10" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question10" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthass_question10" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment10" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are your general impressions of and comments about The Apostolic Church-Ghana?</label>
                        </div>
                        <div class="form-check" style="display: none">
                            <input class="form-check-input" type="radio" name="growthass_question11" value="Somehow" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthassonitor" class="form-control" name="growthass_comment11" rows="3" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                </ol>
                <div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form> --}}
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center"><h4>COMMUNITY IMPRESSION REPORT</h4></div>
        <div class="card-body">
            <form action="{{ route('community-rep') }}" id="commreponitor" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6"> <input name="commrep_district" required placeholder="Name of District" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="commrep_area" required placeholder="Area" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> <input name="commrep_local" required placeholder="Local Assembly" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"> </div>
                    <div class="col-sm-6"> <input name="commrep_status" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How long have you lived in this community?</label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment1" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How long have you known The Apostolic Church-Ghana?</label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment2" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you know any member(s) of the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question3" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question3" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question3" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment3" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you a friend of any member(s) of the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question4" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question4" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question4" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment4" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Have you ever visited the church before? If yes, what took you there?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question5" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question5" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question5" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment5" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has the activities of the church been a bother to you or the community before? If yes, please explain.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question6" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question6" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question6" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment6" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has the church been a blessing to you or the community? If yes, please explain.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question7" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question7" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question7" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment7" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has any member ever witnessed to you or invited you to church before?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question8" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question8" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question8" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment8" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are you a Christian? If yes, where do you fellowship?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question9" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question9" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question9" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment9" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">If you have to choose a new place of worship, would you choose The Apostolic Church (in your community)?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question10" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question10" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question10" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment10" rows="2" placeholder="Details/Comments if any..."></textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are your general impressions of and comments about The Apostolic Church-Ghana?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="commrep_question11" value="Yes">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question11" value="No">
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="commrep_question11" value="Somehow">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="commreponitor" class="form-control" name="commrep_comment11" rows="3" placeholder="Details/Comments if any..."></textarea>
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
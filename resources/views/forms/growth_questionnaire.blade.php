<div class="d-flex justify-content-center mt-3">
    <div class="card text-dark bg-light mb-3 col-8">
        <div class="card-header d-flex justify-content-center">
            @if (isset($data->growth_id))
                <h4>EDIT - {{ $form }}</h4>
            @else
                <h4>GROWTH QUESTIONNAIRE</h4> 
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('growth_questionaire') }}" id="growthqueonitor" method="POST">
                @csrf
                @isset($data->growth_id)
                    <input type="hidden" name="id" value="{{ $data->growth_id }}">
                @endisset
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="growthque_district" value="{{ (isset($data->growth_id)) ? $data->growthque_district : '' }}" placeholder="Name of District" list="districtOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->growth_id))
                            <small class="d-flex justify-content-center mb-4">Name of District</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                    <div class="col-sm-6"> 
                        <input name="growthque_area" value="{{ (isset($data->growth_id)) ? $data->growthque_area : '' }}" placeholder="Name of Area" list="areaOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        @if(isset($data->growth_id))
                            <small class="d-flex justify-content-center mb-4">Name of Area</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> 
                        <input name="growthque_local" value="{{ (isset($data->growth_id)) ? $data->growthque_local : '' }}" placeholder="Name of Local Assembly" list="localOptions" required type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> 
                        @if(isset($data->growth_id))
                            <small class="d-flex justify-content-center mb-4">Name of Local Assembly</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif  
                    </div>
                    <div class="col-sm-6"> 
                        <input name="growthque_status" value="{{ (isset($data->growth_id)) ? $data->growthque_status : '' }}" required placeholder="Interviewee Status" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome">
                        @if(isset($data->growth_id))
                            <small class="d-flex justify-content-center mb-4">Interviewee Status</small>
                        @else
                            <small class="d-flex justify-content-center mb-4"></small>
                        @endif 
                    </div>
                </div>
                <ol>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What is the average attendance of membership during mid-week services?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question1" value="0 - 10" <?php if (isset($data->growth_id) && $data->growthque_question1 == '0 - 10') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                0 - 10
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question1" value="11 - 20" <?php if (isset($data->growth_id) && $data->growthque_question1 == '11 - 20') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                11 - 20
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question1" value="21 - 50" <?php if (isset($data->growth_id) && $data->growthque_question1 == '21 - 50') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                21 - 50
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question1" value="51 - 75" <?php if (isset($data->growth_id) && $data->growthque_question1 == '51 - 75') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                51 - 75
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question1" value="76 - 120" <?php if (isset($data->growth_id) && $data->growthque_question1 == '76 - 120') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                76 - 120
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question1" value="above 120" <?php if (isset($data->growth_id) && $data->growthque_question1 == 'above 120') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                above 120
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment1" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment1 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Does this attendance record show lack of interest in services? Why do you say so?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question2" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question2 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question2" value="No" <?php if (isset($data->growth_id) && $data->growthque_question2 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question2" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question2 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment2" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment2 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are the youth leaving the church after graduation from the Children and Teens' Ministry? If Yes? Why are they leaving?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question3" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question3 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question3" value="No" <?php if (isset($data->growth_id) && $data->growthque_question3 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question3" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question3 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment3" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment3 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Have you identified strategies that will ensure that the youth stay in the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question4" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question4 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question4" value="No" <?php if (isset($data->growth_id) && $data->growthque_question4 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question4" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question4 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment4" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment4 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">What are the reasons why members leave or why visitors do not stay in the church?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question5" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question5 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question5" value="No" <?php if (isset($data->growth_id) && $data->growthque_question5 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question5" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question5 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment5" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment5 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is the leadership of the church doing something about this challenge?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question6" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question6 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question6" value="No" <?php if (isset($data->growth_id) && $data->growthque_question6 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question6" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question6 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment6" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment6 : '' }}</textarea>
                        </div>
                    </li>
                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are members of your assembly leaving? Why do you think your members are not leaving the assembly?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question7" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question7 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question7" value="No" <?php if (isset($data->growth_id) && $data->growthque_question7 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question7" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question7 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment7" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment7 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you think that a personality is not allowing for growth? Why do you think so?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question8" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question8 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question8" value="No" <?php if (isset($data->growth_id) && $data->growthque_question8 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question8" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question8 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment8" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment8 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Has there been any recent suspension? How was it done and why?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question9" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question9 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question9" value="No" <?php if (isset($data->growth_id) && $data->growthque_question9 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question9" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question9 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment9" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment9 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Were the suspended members restored? How was it done?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question10" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question10 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question10" value="No" <?php if (isset($data->growth_id) && $data->growthque_question10 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question10" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question10 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment10" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment10 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Are sermons leading to spiritual growth in your assembly? How?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question11" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question11 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question11" value="No" <?php if (isset($data->growth_id) && $data->growthque_question11 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question11" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question11 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment11" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment11 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Briefly describe the sermons you receive? Were you able to apply them to your life?</label>
                        </div>
                        <div class="">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment12" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment12 : '' }}</textarea>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" required name="growthque_question12" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question12 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question12" value="No" <?php if (isset($data->growth_id) && $data->growthque_question12 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="growthque_question12" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question12 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Is there a way a pastor or elder preaches that you like or do not like?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question13" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question13 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question13" value="No" <?php if (isset($data->growth_id) && $data->growthque_question13 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question13" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question13 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment13" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment13 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you have a visitation team in your assembly? How often do they go on visitations?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question14" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question14 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question14" value="No" <?php if (isset($data->growth_id) && $data->growthque_question14 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question14" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question14 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment14" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment14 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Do you think that your presbytery and pastor are passionate about their relationship with God?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question15" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question15 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question15" value="No" <?php if (isset($data->growth_id) && $data->growthque_question15 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question15" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question15 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment15" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment15 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Can you say that your assembly is a praying one?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question16" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question16 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question16" value="No" <?php if (isset($data->growth_id) && $data->growthque_question16 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question16" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question16 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment16" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment16 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">Can you tell about a wonderful testimony given in your assembly recently?</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="growthque_question17" value="Yes" <?php if (isset($data->growth_id) && $data->growthque_question17 == 'Yes') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question17" value="No" <?php if (isset($data->growth_id) && $data->growthque_question17 == 'No') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="growthque_question17" value="Somehow" <?php if (isset($data->growth_id) && $data->growthque_question17 == 'Somehow') echo "checked";?> >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Somehow
                            </label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment17" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment17 : '' }}</textarea>
                        </div>
                    </li>

                    <li>
                        <div class=""> 
                            <label for="" class="form-label">How did the testimony affect your life?</label>
                        </div>
                        <div class="mb">
                            <textarea form="growthqueonitor" class="form-control" name="growthque_comment18" rows="2" placeholder="Details/Comments if any...">{{ (isset($data->growth_id)) ? $data->growthque_comment18 : '' }}</textarea>
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
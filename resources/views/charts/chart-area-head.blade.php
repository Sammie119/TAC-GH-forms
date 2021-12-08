@extends('layouts.app')

@section('title', 'TAC-forms | Chart on Form')

<style>
    .mb {
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: bold;
    }


    @media print {
			.noprint{
				visibility: hidden;
			}

            .navbar{
               visibility: hidden; 
            }

            .card {
                border: none !important;
            }

            .text-primary {
                zoom: 45%;
            }

            ol li {
                break-inside: avoid;
            }
		}

</style>

@section('content')
    <div class="container-fluid mt-4 px-4">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header"><h3>CHARTS - {{ $form }}</h3></div>
                <div class="card-body">
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        <div class="card text-dark bg-light mb-3 col-10">
                            {{-- <div class="card-header d-flex justify-content-center"><h4>SUPERINTENDENT'S VISITATION REPORT</h4></div> --}}
                            <div class="card-body">
                                <form action="{{ route('area-head') }}" method="POST" id="areaheadonitor">
                                    @csrf
                                    <div class="mb-4" style="margin-left: 2%">
                                        <h4>Total Response: {{ $query['total'] }}</h4>
                                    </div>
                                    <div class="mb-4" style="margin-left: 2%"> 
                                        <label for="" class="form-label">Areas</label>
                                        <ul>
                                            @foreach ($query['area'] as $area)
                                                <li>{{ $area->area }} - {{ $area->count }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mb-4" style="margin-left: 2%"> 
                                        <label for="" class="form-label">Districts</label>
                                        <ul>
                                            @foreach ($query['district'] as $district)
                                                <li>{{ $district->district }} - {{ $district->count }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="mb-4" style="margin-left: 2%"> 
                                        <label for="" class="form-label">Locals</label>
                                        <ul>
                                            @foreach ($query['local'] as $local)
                                                <li>{{ $local->local }} - {{ $local->count }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <ol>
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">List the Districts in the Area and indicate the number of Assemblies in each District</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment1'] as $areahead_comment1)
                                                        <li>{{ $areahead_comment1->areahead_comment1 }} - {{ $areahead_comment1->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Provide the names of all the Pastors in the Area</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment2'] as $areahead_comment2)
                                                        <li>{{ $areahead_comment2->areahead_comment2 }} - {{ $areahead_comment2->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Provide the names of Locals you have visited in the last three months</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment3'] as $areahead_comment3)
                                                        <li>{{ $areahead_comment3->areahead_comment3 }} - {{ $areahead_comment3->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Give the name of the Local for which this is being answered</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment4'] as $areahead_comment4)
                                                        <li>{{ $areahead_comment4->areahead_comment4 }} - {{ $areahead_comment4->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What was your main assignment for the day? (Regular Ministration, Funeral Service, Ordination Service, Wedding etc)</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment5'] as $areahead_comment5)
                                                        <li>{{ $areahead_comment5->areahead_comment5 }} - {{ $areahead_comment5->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Were there any prophecies during the service? If so, please give a brief summary of the prophecies.</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment6'] as $areahead_comment6)
                                                        <li>{{ $areahead_comment6->areahead_comment6 }} - {{ $areahead_comment6->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Quality of the Church Service. How would you rate each of these components of the service?</label>
                                            </div>
                                            <ol type = "a">
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Praise and Worship</label>
                                                    </div>
                                                    <div class="">
                                                        <ul>
                                                            @foreach ($query['question7a'] as $question7a)
                                                                <li>{{ $question7a->areahead_question7a }} - {{ $question7a->y }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card graph mb-3 ml-4 col-12">
                                                            <div class="card-body text-primary" id="question7a" style="height: 400px; margin: 0 auto">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Word Ministration</label>
                                                    </div>
                                                    <div class="">
                                                        <ul>
                                                            @foreach ($query['question7b'] as $question7b)
                                                                <li>{{ $question7b->areahead_question7b }} - {{ $question7b->y }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card graph mb-3 ml-4 col-12">
                                                            <div class="card-body text-primary" id="question7b" style="height: 400px; margin: 0 auto">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Order and Decency</label>
                                                    </div>
                                                    <div class="">
                                                        <ul>
                                                            @foreach ($query['question7c'] as $question7c)
                                                                <li>{{ $question7c->areahead_question7c }} - {{ $question7c->y }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card graph mb-3 ml-4 col-12">
                                                            <div class="card-body text-primary" id="question7c" style="height: 400px; margin: 0 auto">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Prayer Session</label>
                                                    </div>
                                                    <div class="">
                                                        <ul>
                                                            @foreach ($query['question7d'] as $question7d)
                                                                <li>{{ $question7d->areahead_question7d }} - {{ $question7d->y }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card graph mb-3 ml-4 col-12">
                                                            <div class="card-body text-primary" id="question7d" style="height: 400px; margin: 0 auto">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                    
                                                <li>
                                                    <div class="">
                                                        <label for="" class="form-label">Tithes/Offerings</label>
                                                    </div>
                                                    <div class="">
                                                        <ul>
                                                            @foreach ($query['question7e'] as $question7e)
                                                                <li>{{ $question7e->areahead_question7e }} - {{ $question7e->y }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="card graph mb-3 ml-4 col-12">
                                                            <div class="card-body text-primary" id="question7e" style="height: 400px; margin: 0 auto">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Your assesment of the congregations' receptiveness to the word ministration</label>
                                            </div>
                                            <div class="">
                                                <ul>
                                                    @foreach ($query['question8'] as $question8)
                                                        <li>{{ $question8->areahead_question8 }} - {{ $question8->y }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="card graph mb-3 ml-4 col-12">
                                                    <div class="card-body text-primary" id="question8" style="height: 400px; margin: 0 auto">
                                                        
                                                    </div>
                                                </div>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">The cleanliness and arrangement of the Place of Worship; 
                                                    <br> The state/condition of the place of worship</label>
                                            </div>
                                            <div class="">
                                                <ul>
                                                    @foreach ($query['question9'] as $question9)
                                                        <li>{{ $question9->areahead_question9 }} - {{ $question9->y }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="card graph mb-3 ml-4 col-12">
                                                    <div class="card-body text-primary" id="question9" style="height: 400px; margin: 0 auto">
                                                        
                                                    </div>
                                                </div>
                                            </div>    
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Has the Church purchased/own land? 
                                                    <br> (If Yes, indicate the number of plots) </label>
                                            </div>
                                            <div class="">
                                                <ul>
                                                    @foreach ($query['question10'] as $question10)
                                                        <li>{{ $question10->areahead_question10 }} - {{ $question10->y }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="card graph mb-3 ml-4 col-12">
                                                    <div class="card-body text-primary" id="question10" style="height: 400px; margin: 0 auto">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb">
                                                <label for="" class="form-label">Comments</label>
                                                <ul>
                                                    @foreach ($query['areahead_comment10'] as $areahead_comment10)
                                                        <li>{{ $areahead_comment10->areahead_comment10 }} - {{ $areahead_comment10->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Indicate whether the Church land is registered or unregistered?</label>
                                            </div>
                                            <div class="">
                                                <ul>
                                                    @foreach ($query['question11'] as $question11)
                                                        <li>{{ $question11->areahead_question11 }} - {{ $question11->y }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="card graph mb-3 ml-4 col-12">
                                                    <div class="card-body text-primary" id="question11" style="height: 400px; margin: 0 auto">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb">
                                                <label for="" class="form-label">Comments</label>
                                                <ul>
                                                    @foreach ($query['areahead_comment11'] as $areahead_comment11)
                                                        <li>{{ $areahead_comment11->areahead_comment11 }} - {{ $areahead_comment11->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Indicate the nature of the place of Worship. (Classroom, Shed, Residential Property, Uncompleted, Completed etc)</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment12'] as $areahead_comment12)
                                                        <li>{{ $areahead_comment12->areahead_comment12 }} - {{ $areahead_comment12->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there signboards directing people to the place of worship?</label>
                                            </div>
                                            <div class="">
                                                <ul>
                                                    @foreach ($query['question13'] as $question13)
                                                        <li>{{ $question13->areahead_question13 }} - {{ $question13->y }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="col-12">
                                                <div class="card graph mb-3 ml-4 col-12">
                                                    <div class="card-body text-primary" id="question13" style="height: 400px; margin: 0 auto">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb">
                                                <label for="" class="form-label">Comments</label>
                                                <ul>
                                                    @foreach ($query['areahead_comment13'] as $areahead_comment13)
                                                        <li>{{ $areahead_comment13->areahead_comment13 }} - {{ $areahead_comment13->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any praise reports for this local assembly? Please share.</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment14'] as $areahead_comment14)
                                                        <li>{{ $areahead_comment14->areahead_comment14 }} - {{ $areahead_comment14->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Are there any issues that will require General Headquarters attention?</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment15'] as $areahead_comment15)
                                                        <li>{{ $areahead_comment15->areahead_comment15 }} - {{ $areahead_comment15->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">What are your general impressions of and comments on the local church?</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment16'] as $areahead_comment16)
                                                        <li>{{ $areahead_comment16->areahead_comment16 }} - {{ $areahead_comment16->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class=""> 
                                                <label for="" class="form-label">Did you meet any areaheads that you believe have potential for ascension ministry or any other ministry that requires training and development? Please list them and their potential ministries.</label>
                                            </div>
                                            <div class="mb">
                                                <ul>
                                                    @foreach ($query['areahead_comment17'] as $areahead_comment17)
                                                        <li>{{ $areahead_comment17->areahead_comment17 }} - {{ $areahead_comment17->count }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                    
                                        <hr>
                                            <div>
                                                
                                            </div>
                                        <h3>Statistics</h3>
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Attendance Report</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Pastors :</label> {{ $query['areahead_pastors'] }} </div>
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Elders :</label> {{ $query['areahead_elders'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Deacons :</label> {{ $query['areahead_deacons'] }} </div>
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Deaconesses :</label> {{ $query['areahead_deaconesses'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Male Adults :</label> {{ $query['areahead_adult_males'] }} </div>
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Female Adults :</label> {{ $query['areahead_adult_females'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Children :</label> {{ $query['areahead_children'] }} </div>
                                                <div class="col-sm-4"> <label for="" class="form-label">Total Youths :</label> {{ $query['areahead_youth'] }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Grand Total Attendance :</label> {{ $query['areahead_total_att'] }} </div>
                                                
                                            </div>
                                        </li>
                    
                                        <li>
                                            <div class="mt-3"> 
                                                <label for="" class="form-label">Finance Report</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Total Number of Tithe Payers :</label> {{ $query['areahead_tithe_payers'] }}  </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Total Number of active tithe payers :</label> {{ $query['areahead_active_tithe_payers'] }}  </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Total Amount of Tithes paid :</label> {{ $query['areahead_tithes_paid'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Total Thanksgiving Offering :</label> {{ $query['areahead_oferring'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Total of Any other offering :</label> {{ $query['areahead_any_oferring'] }} </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"> <label for="" class="form-label">Grand Total Tithes and Thanksgiving Offering :</label> {{ $query['areahead_total_tithe_off'] }} </div>
                                            </div>
                                        </li>
                    
                                        
                                    </ol>
                                    
                                </form>
                                <button class="btn btn-primary float-end noprint" onclick="window.print()">Print</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
    </div>

    <script src="{{ asset('js/highcharts.js') }}"></script>

    <script>
                    
        window.onload = function(){

            // question7a
            $(function(){
                Highcharts.chart('question7a', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question7a}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question7a}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question7a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7a'] ?>
                    }]
                    
                });
            });

            // question7b
            $(function(){
                Highcharts.chart('question7b', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question7b}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question7b}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question7b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7b'] ?>
                    }]
                    
                });
            });

            // question7c
            $(function(){
                Highcharts.chart('question7c', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question7c}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question7c}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question7c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7c'] ?>
                    }]
                    
                });
            });


            // question7d
            $(function(){
                Highcharts.chart('question7d', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question7d}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question7d}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question7d;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7d'] ?>
                    }]
                    
                });
            });


            // question7e
            $(function(){
                Highcharts.chart('question7e', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question7e}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question7e}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question7e;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7e'] ?>
                    }]
                    
                });
            });


            // question8
            $(function(){
                Highcharts.chart('question8', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question8}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question8}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question8;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question8'] ?>
                    }]
                    
                });
            });

            // question9
            $(function(){
                Highcharts.chart('question9', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question9}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question9}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question9;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question9'] ?>
                    }]
                    
                });
            });

            // question10
            $(function(){
                Highcharts.chart('question10', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question10}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question10}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question10;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question10'] ?>
                    }]
                    
                });
            });
            
             // question11
             $(function(){
                Highcharts.chart('question11', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question11}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question11}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question11;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question11'] ?>
                    }]
                    
                });
            });


            // question13
            $(function(){
                Highcharts.chart('question13', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotshadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Distribution',
                        style: {
                            fontSize: '25px'
                        }
                    },
                    subtitle: {
                        text: 'Source: TAC - Forms',
                        style: {
                            fontSize: '17px'
                        }
                    },
                    tooltip: {
                        pointFormat: '{point.areahead_question13}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix:'%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.areahead_question13}</b>: {point.percentage:.1f}%',
                                style: {
                                    fontSize: '17px'
                                }
                            },
                            showInLegend: {
                                enabled: true,                                
                            }
                        }
                    },
                    legend:{
                        enabled: true,
                        
                        labelFormatter: function(){
                            return this.areahead_question13;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question13'] ?>
                    }]
                    
                });
            });


        };
    </script>
    
@endsection
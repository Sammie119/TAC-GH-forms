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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTOR'S VISITATION REPORT</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('district-past-report') }}" id="distpastonitor" method="POST">
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
                                            <label for="" class="form-label">List the Locals in the District</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment1'] as $distpast_comment1)
                                                    <li>{{ $distpast_comment1->distpast_comment1 }} - {{ $distpast_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Provide the names of all the Presiding Elders/Officers in the District</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment2'] as $distpast_comment2)
                                                    <li>{{ $distpast_comment2->distpast_comment2 }} - {{ $distpast_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Which Local have you visited most recently</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment3'] as $distpast_comment3)
                                                    <li>{{ $distpast_comment3->distpast_comment3 }} - {{ $distpast_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What was your main assignment for the visit? (Regular Ministration, Funeral Service, Ordination Service etc)</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment4'] as $distpast_comment4)
                                                    <li>{{ $distpast_comment4->distpast_comment4 }} - {{ $distpast_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Were there any prophecies during the service? If so, please give a brief highlight of the prophecies.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment5'] as $distpast_comment5)
                                                    <li>{{ $distpast_comment5->distpast_comment5 }} - {{ $distpast_comment5->count }}</li>
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
                                                        @foreach ($query['question6a'] as $question6a)
                                                            <li>{{ $question6a->distpast_question6a }} - {{ $question6a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6a" style="height: 400px; margin: 0 auto">
                                                            
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
                                                        @foreach ($query['question6b'] as $question6b)
                                                            <li>{{ $question6b->distpast_question6b }} - {{ $question6b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6b" style="height: 400px; margin: 0 auto">
                                                            
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
                                                        @foreach ($query['question6c'] as $question6c)
                                                            <li>{{ $question6c->distpast_question6c }} - {{ $question6c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6c" style="height: 400px; margin: 0 auto">
                                                            
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
                                                        @foreach ($query['question6d'] as $question6d)
                                                            <li>{{ $question6d->distpast_question6d }} - {{ $question6d->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6d" style="height: 400px; margin: 0 auto">
                                                            
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
                                                        @foreach ($query['question6e'] as $question6e)
                                                            <li>{{ $question6e->distpast_question6e }} - {{ $question6e->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6e" style="height: 400px; margin: 0 auto">
                                                            
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
                                                @foreach ($query['question7'] as $question7)
                                                    <li>{{ $question7->distpast_question7 }} - {{ $question7->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question7" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>    
                                    </li>
                
                                    <li>
                                        <div class="mt-3"> 
                                            <label for="" class="form-label">The cleanliness and arrangement of the Place of Worship</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question8'] as $question8)
                                                    <li>{{ $question8->distpast_question8 }} - {{ $question8->y }}</li>
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
                                            <label for="" class="form-label">Are there signboards directing people to the places of worship?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question9'] as $question9)
                                                    <li>{{ $question9->distpast_question9 }} - {{ $question9->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question9" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['distpast_comment9'] as $distpast_comment9)
                                                    <li>{{ $distpast_comment9->distpast_comment9 }} - {{ $distpast_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class="mt-3"> 
                                            <label for="" class="form-label">Are there any praise reports for this local assembly? Please share.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment10'] as $distpast_comment10)
                                                    <li>{{ $distpast_comment10->distpast_comment10 }} - {{ $distpast_comment10->count }}</li>
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
                                                @foreach ($query['distpast_comment11'] as $distpast_comment11)
                                                    <li>{{ $distpast_comment11->distpast_comment11 }} - {{ $distpast_comment11->count }}</li>
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
                                                @foreach ($query['distpast_comment12'] as $distpast_comment12)
                                                    <li>{{ $distpast_comment12->distpast_comment12 }} - {{ $distpast_comment12->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What methods do you have for Evangelism / Soul Winning</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment13'] as $distpast_comment13)
                                                    <li>{{ $distpast_comment13->distpast_comment13 }} - {{ $distpast_comment13->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How regularly is Evangelism Done</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment14'] as $distpast_comment14)
                                                    <li>{{ $distpast_comment14->distpast_comment14 }} - {{ $distpast_comment14->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do you have an on going Discipleship/ New Convert classes?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment15'] as $distpast_comment15)
                                                    <li>{{ $distpast_comment15->distpast_comment15 }} - {{ $distpast_comment15->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What are the existing structures for raising leaders </label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['distpast_comment16'] as $distpast_comment16)
                                                    <li>{{ $distpast_comment16->distpast_comment16 }} - {{ $distpast_comment16->count }}</li>
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
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Pastors :</label> {{ $query['distpast_pastors'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Elders :</label> {{ $query['distpast_elders'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Deacons :</label> {{ $query['distpast_deacons'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Deaconesses :</label> {{ $query['distpast_deaconesses'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Male Adults :</label> {{ $query['distpast_adult_males'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Female Adults :</label> {{ $query['distpast_adult_females'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Children :</label> {{ $query['distpast_children'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Youths :</label> {{ $query['distpast_youth'] }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Grand Total Attendance :</label> {{ $query['distpast_total_att'] }} </div>
                                            
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class="mt-3"> 
                                            <label for="" class="form-label">Finance Report</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Number of Tithe Payers :</label> {{ $query['distpast_tithe_payers'] }}  </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Number of Active Tithe Payers :</label> {{ $query['distpast_active_tithe_payers'] }}  </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Number of Officers paying tithes :</label> {{ $query['distpast_officers_tithe_payers'] }}  </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Amount of Tithes paid :</label> {{ $query['distpast_tithes_paid'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Thanksgiving Offering :</label> {{ $query['distpast_oferring'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total of Any other offering :</label> {{ $query['distpast_any_oferring'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Grand Total Tithes and Thanksgiving Offering :</label> {{ $query['distpast_total_tithe_off'] }} </div>
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
    
    <script src="{{ asset('js/highcharts.js') }}"></script>

    <script>
        window.onload = function(){

            // question6a
            $(function(){
                Highcharts.chart('question6a', {
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
                        pointFormat: '{point.distpast_question6a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question6a}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question6a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6a'] ?>
                    }]
                    
                });
            });

            // question6b
            $(function(){
                Highcharts.chart('question6b', {
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
                        pointFormat: '{point.distpast_question6b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question6b}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question6b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6b'] ?>
                    }]
                    
                });
            });


            // question6c
            $(function(){
                Highcharts.chart('question6c', {
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
                        pointFormat: '{point.distpast_question6c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question6c}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question6c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6c'] ?>
                    }]
                    
                });
            });

            // question6d
            $(function(){
                Highcharts.chart('question6d', {
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
                        pointFormat: '{point.distpast_question6d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question6d}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question6d;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6d'] ?>
                    }]
                    
                });
            });

            // question6e
            $(function(){
                Highcharts.chart('question6e', {
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
                        pointFormat: '{point.distpast_question6e}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question6e}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question6e;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6e'] ?>
                    }]
                    
                });
            });


            // question7
            $(function(){
                Highcharts.chart('question7', {
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
                        pointFormat: '{point.distpast_question7}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question7}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question7;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7'] ?>
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
                        pointFormat: '{point.distpast_question8}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question8}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question8;
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
                        pointFormat: '{point.distpast_question9}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.distpast_question9}</b>: {point.percentage:.1f}%',
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
                            return this.distpast_question9;
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


        };
    </script>
    
@endsection
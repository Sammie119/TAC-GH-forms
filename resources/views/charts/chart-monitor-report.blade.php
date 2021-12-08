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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>MONITOR'S  REPORT</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('monitor-report') }}" id="monireponitor" method="POST">
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
                                            <label for="" class="form-label">How would you describe the quality of the church environment in terms of cleanliness?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question1'] as $question1)
                                                    <li>{{ $question1->monirep_question1 }} - {{ $question1->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question1" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['monirep_comment1'] as $monirep_comment1)
                                                    <li>{{ $monirep_comment1->monirep_comment1 }} - {{ $monirep_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Is there a service for children and youth?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question2'] as $question2)
                                                    <li>{{ $question2->monirep_question2 }} - {{ $question2->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question2" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['monirep_comment2'] as $monirep_comment2)
                                                    <li>{{ $monirep_comment2->monirep_comment2 }} - {{ $monirep_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How would you describe the place of meeting for the Children and Youth?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['monirep_comment3'] as $monirep_comment3)
                                                    <li>{{ $monirep_comment3->monirep_comment3 }} - {{ $monirep_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How would you describe the quality of the services for the Children and Youth?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['monirep_comment4'] as $monirep_comment4)
                                                    <li>{{ $monirep_comment4->monirep_comment4 }} - {{ $monirep_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are members coming to church services early enough?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question5'] as $question5)
                                                    <li>{{ $question5->monirep_question5 }} - {{ $question5->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question5" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['monirep_comment5'] as $monirep_comment5)
                                                    <li>{{ $monirep_comment5->monirep_comment5 }} - {{ $monirep_comment5->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do late comers exhbit a sense of urgency in coming to church?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question6'] as $question6)
                                                    <li>{{ $question6->monirep_question6 }} - {{ $question6->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question6" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['monirep_comment6'] as $monirep_comment6)
                                                    <li>{{ $monirep_comment6->monirep_comment6 }} - {{ $monirep_comment6->count }}</li>
                                                @endforeach
                                            </ul>
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
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question7a'] as $question7a)
                                                            <li>{{ $question7a->monirep_question7a }} - {{ $question7a->y }}</li>
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
                                                            <li>{{ $question7b->monirep_question7b }} - {{ $question7b->y }}</li>
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
                                                            <li>{{ $question7c->monirep_question7c }} - {{ $question7c->y }}</li>
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
                                                            <li>{{ $question7d->monirep_question7d }} - {{ $question7d->y }}</li>
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
                                                            <li>{{ $question7e->monirep_question7e }} - {{ $question7e->y }}</li>
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
                                            <label for="" class="form-label">The environment and status of the place of Worship (whether permanent and completed temple, classroom, shed, private residence, etc)</label>
                                        </div>
                                        <ol type = "a">
                                            <li>
                                                <div class="">
                                                    <label for="" class="form-label">Signboards leading to the venue?</label>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question8a'] as $question8a)
                                                            <li>{{ $question8a->monirep_question8a }} - {{ $question8a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question8a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                
                                            <li>
                                                <div class="">
                                                    <label for="" class="form-label">What is the nature of the worship center?</label>
                                                </div>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['monirep_comment8b'] as $monirep_comment8b)
                                                            <li>{{ $monirep_comment8b->monirep_comment8b }} - {{ $monirep_comment8b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What are your general impressions of and comments on the operations of the local church?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['monirep_comment9'] as $monirep_comment9)
                                                    <li>{{ $monirep_comment9->monirep_comment9 }} - {{ $monirep_comment9->count }}</li>
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
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Pastors :</label> {{ $query['monirep_pastors'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Elders :</label> {{ $query['monirep_elders'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Deacons :</label> {{ $query['monirep_deacons'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Deaconesses :</label> {{ $query['monirep_deaconesses'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Male Adults :</label> {{ $query['monirep_adult_males'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Female Adults :</label> {{ $query['monirep_adult_females'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Children :</label> {{ $query['monirep_children'] }} </div>
                                            <div class="col-sm-4"> <label for="" class="form-label">Total Youths :</label> {{ $query['monirep_youth'] }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Grand Total Attendance :</label> {{ $query['monirep_total_att'] }} </div>
                                            
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class="mt-3"> 
                                            <label for="" class="form-label">Finance Report</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Number of Tithe Payers :</label> {{ $query['monirep_tithe_payers'] }}  </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Amount of Tithes paid :</label> {{ $query['monirep_tithes_paid'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Total Thanksgiving Offering :</label> {{ $query['monirep_oferring'] }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"> <label for="" class="form-label">Grand Total Tithes and Thanksgiving Offering :</label> {{ $query['monirep_total_tithe_off'] }} </div>
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

            // question1
            $(function(){
                Highcharts.chart('question1', {
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
                        pointFormat: '{point.monirep_question1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question1}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question1;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1'] ?>
                    }]
                    
                });
            });

            // question2
            $(function(){
                Highcharts.chart('question2', {
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
                        pointFormat: '{point.monirep_question2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question2}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question2;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question2'] ?>
                    }]
                    
                });
            });

            // question5
            $(function(){
                Highcharts.chart('question5', {
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
                        pointFormat: '{point.monirep_question5}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question5}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question5;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question5'] ?>
                    }]
                    
                });
            });

            // question6
            $(function(){
                Highcharts.chart('question6', {
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
                        pointFormat: '{point.monirep_question6}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question6}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question6;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6'] ?>
                    }]
                    
                });
            });

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
                        pointFormat: '{point.monirep_question7a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question7a}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question7a;
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
                        pointFormat: '{point.monirep_question7b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question7b}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question7b;
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
                        pointFormat: '{point.monirep_question7c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question7c}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question7c;
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
                        pointFormat: '{point.monirep_question7d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question7d}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question7d;
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
                        pointFormat: '{point.monirep_question7e}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question7e}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question7e;
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

            // question8a
            $(function(){
                Highcharts.chart('question8a', {
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
                        pointFormat: '{point.monirep_question8a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.monirep_question8a}</b>: {point.percentage:.1f}%',
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
                            return this.monirep_question8a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question8a'] ?>
                    }]
                    
                });
            });

        };
    </script>
    
@endsection
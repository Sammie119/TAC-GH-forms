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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT OFFICERS LEVEL QUESTIONNAIRE</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('district-level') }}" id="dlmonitor" method="POST">
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
                                            <label for="" class="form-label">Does the District leadership raise funds as prescribed by the Headquaters?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question1'] as $question1)
                                                    <li>{{ $question1->dlm_question1 }} - {{ $question1->y }}</li>
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
                                                @foreach ($query['dlm_comment1'] as $dlm_comment1)
                                                    <li>{{ $dlm_comment1->dlm_comment1 }} - {{ $dlm_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do District Church Services last within the average two and half  hour service duration?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question2'] as $question2)
                                                    <li>{{ $question2->dlm_question2 }} - {{ $question2->y }}</li>
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
                                                @foreach ($query['dlm_comment2'] as $dlm_comment2)
                                                    <li>{{ $dlm_comment2->dlm_comment2 }} - {{ $dlm_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are district prayer meetings decent and devoid of unscriptural practices?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question3'] as $question3)
                                                    <li>{{ $question3->dlm_question3 }} - {{ $question3->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question3" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['dlm_comment3'] as $dlm_comment3)
                                                    <li>{{ $dlm_comment3->dlm_comment3 }} - {{ $dlm_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do District movement leaders attend District Presbytery meetings?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question4'] as $question4)
                                                    <li>{{ $question4->dlm_question4 }} - {{ $question4->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question4" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['dlm_comment4'] as $dlm_comment4)
                                                    <li>{{ $dlm_comment4->dlm_comment4 }} - {{ $dlm_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are Children and Youth ministries encouraged and flourishing?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question5'] as $question5)
                                                    <li>{{ $question5->dlm_question5 }} - {{ $question5->y }}</li>
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
                                                @foreach ($query['dlm_comment5'] as $dlm_comment5)
                                                    <li>{{ $dlm_comment5->dlm_comment5 }} - {{ $dlm_comment5->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Is the District leadership recognising and encouraging Women in Ministry?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question6'] as $question6)
                                                    <li>{{ $question6->dlm_question6 }} - {{ $question6->y }}</li>
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
                                                @foreach ($query['dlm_comment6'] as $dlm_comment6)
                                                    <li>{{ $dlm_comment6->dlm_comment6 }} - {{ $dlm_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do members come to District Meetings with expectation?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question7'] as $question7)
                                                    <li>{{ $question7->dlm_question7 }} - {{ $question7->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question7" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['dlm_comment7'] as $dlm_comment7)
                                                    <li>{{ $dlm_comment7->dlm_comment7 }} - {{ $dlm_comment7->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Is the power of the Holy Spirit present at District services?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question8'] as $question8)
                                                    <li>{{ $question8->dlm_question8 }} - {{ $question8->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question8" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['dlm_comment8'] as $dlm_comment8)
                                                    <li>{{ $dlm_comment8->dlm_comment8 }} - {{ $dlm_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are members and officers respectful of leadership?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question9'] as $question9)
                                                    <li>{{ $question9->dlm_question9 }} - {{ $question9->y }}</li>
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
                                                @foreach ($query['dlm_comment9'] as $dlm_comment9)
                                                    <li>{{ $dlm_comment9->dlm_comment9 }} - {{ $dlm_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are evening services well attended?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question10'] as $question10)
                                                    <li>{{ $question10->dlm_question10 }} - {{ $question10->y }}</li>
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
                                                @foreach ($query['dlm_comment10'] as $dlm_comment10)
                                                    <li>{{ $dlm_comment10->dlm_comment10 }} - {{ $dlm_comment10->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are the members and movements over-burdened with appeal for funds?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question11'] as $question11)
                                                    <li>{{ $question11->dlm_question11 }} - {{ $question11->y }}</li>
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
                                                @foreach ($query['dlm_comment11'] as $dlm_comment11)
                                                    <li>{{ $dlm_comment11->dlm_comment11 }} - {{ $dlm_comment11->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are all locals in existence and functioning well?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question12'] as $question12)
                                                    <li>{{ $question12->dlm_question12 }} - {{ $question12->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question12" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['dlm_comment12'] as $dlm_comment12)
                                                    <li>{{ $dlm_comment12->dlm_comment12 }} - {{ $dlm_comment12->count }}</li>
                                                @endforeach
                                            </ul>
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
                        pointFormat: '{point.dlm_question1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question1}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question1;
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
                        pointFormat: '{point.dlm_question2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question2}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question2;
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


            // question3
            $(function(){
                Highcharts.chart('question3', {
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
                        pointFormat: '{point.dlm_question3}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question3}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question3;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3'] ?>
                    }]
                    
                });
            });

            // question4
            $(function(){
                Highcharts.chart('question4', {
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
                        pointFormat: '{point.dlm_question4}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question4}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question4;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question4'] ?>
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
                        pointFormat: '{point.dlm_question5}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question5}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question5;
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
                        pointFormat: '{point.dlm_question6}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question6}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question6;
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
                        pointFormat: '{point.dlm_question7}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question7}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question7;
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
                        pointFormat: '{point.dlm_question8}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question8}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question8;
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
                        pointFormat: '{point.dlm_question9}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question9}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question9;
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
                        pointFormat: '{point.dlm_question10}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question10}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question10;
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
                        pointFormat: '{point.dlm_question11}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question11}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question11;
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

            // question12
            $(function(){
                Highcharts.chart('question12', {
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
                        pointFormat: '{point.dlm_question12}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.dlm_question12}</b>: {point.percentage:.1f}%',
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
                            return this.dlm_question12;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question12'] ?>
                    }]
                    
                });
            });


        };
    </script>
    
@endsection
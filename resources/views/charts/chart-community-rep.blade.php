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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>COMMUNITY IMPRESSION REPORT</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('community-rep') }}" id="commreponitor" method="POST">
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
                                            <label for="" class="form-label">How long have you lived in this community?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['commrep_comment1'] as $commrep_comment1)
                                                    <li>{{ $commrep_comment1->commrep_comment1 }} - {{ $commrep_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How long have you known The Apostolic Church-Ghana?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['commrep_comment2'] as $commrep_comment2)
                                                    <li>{{ $commrep_comment2->commrep_comment2}} - {{ $commrep_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Do you know any member(s) of the church?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question3'] as $question3)
                                                    <li>{{ $question3->commrep_question3 }} - {{ $question3->y }}</li>
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
                                                @foreach ($query['commrep_comment3'] as $commrep_comment3)
                                                    <li>{{ $commrep_comment3->commrep_comment3 }} - {{ $commrep_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you a friend of any member(s) of the church?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question4'] as $question4)
                                                    <li>{{ $question4->commrep_question4 }} - {{ $question4->y }}</li>
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
                                                @foreach ($query['commrep_comment4'] as $commrep_comment4)
                                                    <li>{{ $commrep_comment4->commrep_comment4 }} - {{ $commrep_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Have you ever visited the church before? If yes, what took you there?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question5'] as $question5)
                                                    <li>{{ $question5->commrep_question5 }} - {{ $question5->y }}</li>
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
                                                @foreach ($query['commrep_comment5'] as $commrep_comment5)
                                                    <li>{{ $commrep_comment5->commrep_comment5 }} - {{ $commrep_comment5->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Has the activities of the church been a bother to you or the community before? If yes, please explain.</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question6'] as $question6)
                                                    <li>{{ $question6->commrep_question6 }} - {{ $question6->y }}</li>
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
                                                @foreach ($query['commrep_comment6'] as $commrep_comment6)
                                                    <li>{{ $commrep_comment6->commrep_comment6 }} - {{ $commrep_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Has the church been a blessing to you or the community? If yes, please explain.</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question7'] as $question7)
                                                    <li>{{ $question7->commrep_question7 }} - {{ $question7->y }}</li>
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
                                                @foreach ($query['commrep_comment7'] as $commrep_comment7)
                                                    <li>{{ $commrep_comment7->commrep_comment7 }} - {{ $commrep_comment7->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Has any member ever witnessed to you or invited you to church before?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question8'] as $question8)
                                                    <li>{{ $question8->commrep_question8 }} - {{ $question8->y }}</li>
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
                                                @foreach ($query['commrep_comment8'] as $commrep_comment8)
                                                    <li>{{ $commrep_comment8->commrep_comment8 }} - {{ $commrep_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you a Christian? If yes, where do you fellowship?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question9'] as $question9)
                                                    <li>{{ $question9->commrep_question9 }} - {{ $question9->y }}</li>
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
                                                @foreach ($query['commrep_comment9'] as $commrep_comment9)
                                                    <li>{{ $commrep_comment9->commrep_comment9 }} - {{ $commrep_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">If you have to choose a new place of worship, would you choose The Apostolic Church (in your community)?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question10'] as $question10)
                                                    <li>{{ $question10->commrep_question10 }} - {{ $question10->y }}</li>
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
                                                @foreach ($query['commrep_comment10'] as $commrep_comment10)
                                                    <li>{{ $commrep_comment10->commrep_comment10 }} - {{ $commrep_comment10->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What are your general impressions of and comments about The Apostolic Church-Ghana?</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question11'] as $question11)
                                                    <li>{{ $question11->commrep_question11 }} - {{ $question11->y }}</li>
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
                                                @foreach ($query['commrep_comment11'] as $commrep_comment11)
                                                    <li>{{ $commrep_comment11->commrep_comment11 }} - {{ $commrep_comment11->count }}</li>
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
                        pointFormat: '{point.commrep_question3}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question3}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question3;
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
                        pointFormat: '{point.commrep_question4}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question4}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question4;
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
                        pointFormat: '{point.commrep_question5}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question5}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question5;
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
                        pointFormat: '{point.commrep_question6}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question6}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question6;
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
                        pointFormat: '{point.commrep_question7}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question7}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question7;
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
                        pointFormat: '{point.commrep_question8}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question8}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question8;
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
                        pointFormat: '{point.commrep_question9}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question9}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question9;
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
                        pointFormat: '{point.commrep_question10}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question10}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question10;
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
                        pointFormat: '{point.commrep_question11}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.commrep_question11}</b>: {point.percentage:.1f}%',
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
                            return this.commrep_question11;
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

        };
    </script>
    
@endsection
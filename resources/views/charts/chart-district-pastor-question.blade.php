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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>DISTRICT PASTORS' DIRECT QUESTIONNAIRE</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('district-past-question') }}" id="pastorquesonitor" method="POST">
                                @csrf
                                <div class="mb-4" style="margin-left: 2%">
                                    <h4>Total Response: {{ $query['total'] }}</h4>
                                </div>
                                <div class="mb-4" style="margin-left: 2%">
                                    <label for="" class="form-label">Date of Birth (Age)</label>
                                    <ul>
                                        @foreach ($query['dob'] as $dob)
                                            <li>{{ $dob->pastorques_dob }} (age: {{ $dob->age }}) - {{ $dob->count }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="mb-4" style="margin-left: 2%">
                                    <label for="" class="form-label">Year of Call</label>
                                    <ul>
                                        @foreach ($query['year'] as $year)
                                            <li>{{ $year->pastorques_year }} - {{ $year->count }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="mb-4" style="margin-left: 2%">
                                    <label for="" class="form-label">Pastors' wife at Station</label>
                                    <ul>
                                        @foreach ($query['wife'] as $wife)
                                            <li>{{ $wife->pastorques_wife }} - {{ $wife->y }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="col-12">
                                        <div class="card graph mb-3 ml-4 col-12">
                                            <div class="card-body text-primary" id="wife" style="height: 400px; margin: 0 auto">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ol>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment1'] as $pastorques_comment1)
                                                    <li>{{ $pastorques_comment1->pastorques_comment1 }} - {{ $pastorques_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How have you been received by the officers of the church?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment2'] as $pastorques_comment2)
                                                    <li>{{ $pastorques_comment2->pastorques_comment2 }} - {{ $pastorques_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How have you been received by the members of the church?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment3'] as $pastorques_comment3)
                                                    <li>{{ $pastorques_comment3->pastorques_comment3 }} - {{ $pastorques_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What is your assessment of the progress of the work so far?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment4'] as $pastorques_comment4)
                                                    <li>{{ $pastorques_comment4->pastorques_comment4 }} - {{ $pastorques_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are there any ongoing projects? Please briefly describe them and indicate their state of progress.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment5'] as $pastorques_comment5)
                                                    <li>{{ $pastorques_comment5->pastorques_comment5 }} - {{ $pastorques_comment5->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you encountering any difficulties in your station? Please describe them. </label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment6'] as $pastorques_comment6)
                                                    <li>{{ $pastorques_comment6->pastorques_comment6 }} - {{ $pastorques_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are there any challenges that need General HQ attention? Please state them.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment7'] as $pastorques_comment7)
                                                    <li>{{ $pastorques_comment7->pastorques_comment7 }} - {{ $pastorques_comment7->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you receiving encouragement and guidance from the Area Superintendent?  You may give details in if any.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment8'] as $pastorques_comment8)
                                                    <li>{{ $pastorques_comment8->pastorques_comment8 }} - {{ $pastorques_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What challenges do you see in the Area?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment9'] as $pastorques_comment9)
                                                    <li>{{ $pastorques_comment9->pastorques_comment9 }} - {{ $pastorques_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How often does the Area Superintendent visit your District?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment10'] as $pastorques_comment10)
                                                    <li>{{ $pastorques_comment10->pastorques_comment10 }} - {{ $pastorques_comment10->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How frequent are the Area Pastorate meetings?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment11'] as $pastorques_comment11)
                                                    <li>{{ $pastorques_comment11->pastorques_comment11 }} - {{ $pastorques_comment11->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Is there an ongoing Area project you are aware of?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment12'] as $pastorques_comment12)
                                                    <li>{{ $pastorques_comment12->pastorques_comment12 }} - {{ $pastorques_comment12->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How frequent are Area programmes?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment13'] as $pastorques_comment13)
                                                    <li>{{ $pastorques_comment13->pastorques_comment13 }} - {{ $pastorques_comment13->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are there ongoing capacity building programmes at the Area level?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['pastorques_comment14'] as $pastorques_comment14)
                                                    <li>{{ $pastorques_comment14->pastorques_comment14 }} - {{ $pastorques_comment14->count }}</li>
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
            $(function(){
                Highcharts.chart('wife', {
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
                        pointFormat: '{point.pastorques_wife}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.pastorques_wife}</b>: {point.percentage:.1f}%',
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
                            return this.pastorques_wife;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['wife'] ?>
                    }]
                    
                });
            });
        };
    </script>
    
@endsection
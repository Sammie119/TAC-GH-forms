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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('area-sup-question') }}" id="areasupqonitor" method="POST">
                                @csrf
                                <div class="mb-4" style="margin-left: 2%">
                                    <h4>Total Response: {{ $query['total'] }}</h4>
                                </div>
                                <div class="mb-4" style="margin-left: 2%">
                                    <label for="" class="form-label">Date of Birth (Age)</label>
                                    <ul>
                                        @foreach ($query['dob'] as $dob)
                                            <li>{{ $dob->areasupq_dob }} (age: {{ $dob->age }}) - {{ $dob->count }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="mb-4" style="margin-left: 2%">
                                    <label for="" class="form-label">Year of Call</label>
                                    <ul>
                                        @foreach ($query['year'] as $year)
                                            <li>{{ $year->areasupq_year }} - {{ $year->count }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="" style="margin-left: 2%">
                                    <label for="" class="form-label">Pastors' wife at Station</label>
                                    <ul>
                                        @foreach ($query['wife'] as $wife)
                                            <li>{{ $wife->areasupq_wife }} - {{ $wife->y }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <div class="card graph mb-3 ml-4 col-12">
                                        <div class="card-body text-primary" id="wife" style="height: 400px; margin: 0 auto">
                                            
                                        </div>
                                    </div>
                                </div>
                                <ol>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How would you compare current membership against membership at your resumption of duty</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['areasupq_comment1'] as $areasupq_comment1)
                                                    <li>{{ $areasupq_comment1->areasupq_comment1 }} - {{ $areasupq_comment1->count }}</li>
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
                                                @foreach ($query['areasupq_comment2'] as $areasupq_comment2)
                                                    <li>{{ $areasupq_comment2->areasupq_comment2 }} - {{ $areasupq_comment2->count }}</li>
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
                                                @foreach ($query['areasupq_comment3'] as $areasupq_comment3)
                                                    <li>{{ $areasupq_comment3->areasupq_comment3 }} - {{ $areasupq_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What is your assessment of the progress of the work of ministry so far?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['areasupq_comment4'] as $areasupq_comment4)
                                                    <li>{{ $areasupq_comment4->areasupq_comment4 }} - {{ $areasupq_comment4->count }}</li>
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
                                                @foreach ($query['areasupq_comment5'] as $areasupq_comment5)
                                                    <li>{{ $areasupq_comment5->areasupq_comment5 }} - {{ $areasupq_comment5->count }}</li>
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
                                                @foreach ($query['areasupq_comment6'] as $areasupq_comment6)
                                                    <li>{{ $areasupq_comment6->areasupq_comment6 }} - {{ $areasupq_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How are you addressing these difficulties in your Districts/Area Level?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['areasupq_comment7'] as $areasupq_comment7)
                                                    <li>{{ $areasupq_comment7->areasupq_comment7 }} - {{ $areasupq_comment7->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What Challenges are you facing for which you will need Head Office support.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['areasupq_comment8'] as $areasupq_comment8)
                                                    <li>{{ $areasupq_comment8->areasupq_comment8 }} - {{ $areasupq_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are your District Pastors cooperating with you?  You may give details if any.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['areasupq_comment9'] as $areasupq_comment9)
                                                    <li>{{ $areasupq_comment9->areasupq_comment9 }} - {{ $areasupq_comment9->count }}</li>
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
                        pointFormat: '{point.areasupq_wife}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.areasupq_wife}</b>: {point.percentage:.1f}%',
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
                            return this.areasupq_wife;
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
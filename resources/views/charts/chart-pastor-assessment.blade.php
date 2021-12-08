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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>PASTOR'S ASSESSMENT QUESTIONNAIRE</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('pastorassesstment') }}" id="past_assonitor" method="POST">
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
                                            <label for="" class="form-label">How would you compare current membership vrs membership at resumption of duty of your Pastor?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment1'] as $past_ass_comment1)
                                                    <li>{{ $past_ass_comment1->past_ass_comment1 }} - {{ $past_ass_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How have you received your Pastor?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment2'] as $past_ass_comment2)
                                                    <li>{{ $past_ass_comment2->past_ass_comment2 }} - {{ $past_ass_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What is your assessment of the progress of work so far?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment3'] as $past_ass_comment3)
                                                    <li>{{ $past_ass_comment3->past_ass_comment3 }} - {{ $past_ass_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are there any ongoing projects? Please describe them and indicate their state of progress.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment4'] as $past_ass_comment4)
                                                    <li>{{ $past_ass_comment4->past_ass_comment4 }} - {{ $past_ass_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you aware of any difficulties of your Pastor? Please describe them. </label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment5'] as $past_ass_comment5)
                                                    <li>{{ $past_ass_comment5->past_ass_comment5 }} - {{ $past_ass_comment5->count }}</li>
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
                                                @foreach ($query['past_ass_comment6'] as $past_ass_comment6)
                                                    <li>{{ $past_ass_comment6->past_ass_comment6 }} - {{ $past_ass_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Are you receiving encouragement and guidance from your Pastor?  You may give details in if any.</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment7'] as $past_ass_comment7)
                                                    <li>{{ $past_ass_comment7->past_ass_comment7 }} - {{ $past_ass_comment7->count }}</li>
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
                                                @foreach ($query['past_ass_comment8'] as $past_ass_comment8)
                                                    <li>{{ $past_ass_comment8->past_ass_comment8 }} - {{ $past_ass_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How frequent is the Area Superintendent visit?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment9'] as $past_ass_comment9)
                                                    <li>{{ $past_ass_comment9->past_ass_comment9 }} - {{ $past_ass_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">How frequent is the Area Pastorate meetings?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment10'] as $past_ass_comment10)
                                                    <li>{{ $past_ass_comment10->past_ass_comment10 }} - {{ $past_ass_comment10->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Is there an ongoing project?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment11'] as $past_ass_comment11)
                                                    <li>{{ $past_ass_comment11->past_ass_comment11 }} - {{ $past_ass_comment11->count }}</li>
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
                                                @foreach ($query['past_ass_comment12'] as $past_ass_comment12)
                                                    <li>{{ $past_ass_comment12->past_ass_comment12 }} - {{ $past_ass_comment12->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">What are the ongoing capacity building programmes?</label>
                                        </div>
                                        <div class="mb">
                                            <ul>
                                                @foreach ($query['past_ass_comment13'] as $past_ass_comment13)
                                                    <li>{{ $past_ass_comment13->past_ass_comment13 }} - {{ $past_ass_comment13->count }}</li>
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

    
@endsection
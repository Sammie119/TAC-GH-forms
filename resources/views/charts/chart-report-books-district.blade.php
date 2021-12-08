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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>RECORDING AND BOOK KEEPING - AREA</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('record-books-area') }}" id="rec_areaonitor" method="POST">
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
                                <ol>
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Cash book</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question1'] as $question1)
                                                    <li>{{ $question1->rec_dist_question1 }} - {{ $question1->y }}</li>
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
                                                @foreach ($query['rec_dist_comment1'] as $rec_dist_comment1)
                                                    <li>{{ $rec_dist_comment1->rec_dist_comment1 }} - {{ $rec_dist_comment1->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Incomplete Records</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question2'] as $question2)
                                                    <li>{{ $question2->rec_dist_question2 }} - {{ $question2->y }}</li>
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
                                                @foreach ($query['rec_dist_comment2'] as $rec_dist_comment2)
                                                    <li>{{ $rec_dist_comment2->rec_dist_comment2 }} - {{ $rec_dist_comment2->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Individual tithe register</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question3'] as $question3)
                                                    <li>{{ $question3->rec_dist_question3 }} - {{ $question3->y }}</li>
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
                                                @foreach ($query['rec_dist_comment3'] as $rec_dist_comment3)
                                                    <li>{{ $rec_dist_comment3->rec_dist_comment3 }} - {{ $rec_dist_comment3->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Multiple Offering</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question4'] as $question4)
                                                    <li>{{ $question4->rec_dist_question4 }} - {{ $question4->y }}</li>
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
                                                @foreach ($query['rec_dist_comment4'] as $rec_dist_comment4)
                                                    <li>{{ $rec_dist_comment4->rec_dist_comment4 }} - {{ $rec_dist_comment4->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Improper Records</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question5'] as $question5)
                                                    <li>{{ $question5->rec_dist_question5 }} - {{ $question5->y }}</li>
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
                                                @foreach ($query['rec_dist_comment5'] as $rec_dist_comment5)
                                                    <li>{{ $rec_dist_comment5->rec_dist_comment5 }} - {{ $rec_dist_comment5->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">New book of records</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question6'] as $question6)
                                                    <li>{{ $question6->rec_dist_question6 }} - {{ $question6->y }}</li>
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
                                                @foreach ($query['rec_dist_comment6'] as $rec_dist_comment6)
                                                    <li>{{ $rec_dist_comment6->rec_dist_comment6 }} - {{ $rec_dist_comment6->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Form A</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question7'] as $question7)
                                                    <li>{{ $question7->rec_dist_question7 }} - {{ $question7->y }}</li>
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
                                                @foreach ($query['rec_dist_comment7'] as $rec_dist_comment7)
                                                    <li>{{ $rec_dist_comment7->rec_dist_comment7 }} - {{ $rec_dist_comment7->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Bank statement available</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question8'] as $question8)
                                                    <li>{{ $question8->rec_dist_question8 }} - {{ $question8->y }}</li>
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
                                                @foreach ($query['rec_dist_comment8'] as $rec_dist_comment8)
                                                    <li>{{ $rec_dist_comment8->rec_dist_comment8 }} - {{ $rec_dist_comment8->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Bank Reconciliation</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question9'] as $question9)
                                                    <li>{{ $question9->rec_dist_question9 }} - {{ $question9->y }}</li>
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
                                                @foreach ($query['rec_dist_comment9'] as $rec_dist_comment9)
                                                    <li>{{ $rec_dist_comment9->rec_dist_comment9 }} - {{ $rec_dist_comment9->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Form B</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question10'] as $question10)
                                                    <li>{{ $question10->rec_dist_question10 }} - {{ $question10->y }}</li>
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
                                                @foreach ($query['rec_dist_comment10'] as $rec_dist_comment10)
                                                    <li>{{ $rec_dist_comment10->rec_dist_comment10 }} - {{ $rec_dist_comment10->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Form C</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question11'] as $question11)
                                                    <li>{{ $question11->rec_dist_question11 }} - {{ $question11->y }}</li>
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
                                                @foreach ($query['rec_dist_comment11'] as $rec_dist_comment11)
                                                    <li>{{ $rec_dist_comment11->rec_dist_comment11 }} - {{ $rec_dist_comment11->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Presbytery / Pastorate Minutes</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question12'] as $question12)
                                                    <li>{{ $question12->rec_dist_question12 }} - {{ $question12->y }}</li>
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
                                                @foreach ($query['rec_dist_comment12'] as $rec_dist_comment12)
                                                    <li>{{ $rec_dist_comment12->rec_dist_comment12 }} - {{ $rec_dist_comment12->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Payment Vouchers</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question13'] as $question13)
                                                    <li>{{ $question13->rec_dist_question13 }} - {{ $question13->y }}</li>
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
                                                @foreach ($query['rec_dist_comment13'] as $rec_dist_comment13)
                                                    <li>{{ $rec_dist_comment13->rec_dist_comment13 }} - {{ $rec_dist_comment13->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Deposit slips</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question14'] as $question14)
                                                    <li>{{ $question14->rec_dist_question14 }} - {{ $question14->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question14" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment14'] as $rec_dist_comment14)
                                                    <li>{{ $rec_dist_comment14->rec_dist_comment14 }} - {{ $rec_dist_comment14->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Receipts for payments made (apart from National and Area)</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question15'] as $question15)
                                                    <li>{{ $question15->rec_dist_question15 }} - {{ $question15->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question15" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment15'] as $rec_dist_comment15)
                                                    <li>{{ $rec_dist_comment15->rec_dist_comment15 }} - {{ $rec_dist_comment15->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Registration, title documents, site plan for acquisitions - Land</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question16'] as $question16)
                                                    <li>{{ $question16->rec_dist_question16 }} - {{ $question16->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question16" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment16'] as $rec_dist_comment16)
                                                    <li>{{ $rec_dist_comment16->rec_dist_comment16 }} - {{ $rec_dist_comment16->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Cheque books (used)</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question17'] as $question17)
                                                    <li>{{ $question17->rec_dist_question17 }} - {{ $question17->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question17" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment17'] as $rec_dist_comment17)
                                                    <li>{{ $rec_dist_comment17->rec_dist_comment17 }} - {{ $rec_dist_comment17->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Supporting receipt, invoices</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question18'] as $question18)
                                                    <li>{{ $question18->rec_dist_question18 }} - {{ $question18->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question18" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment18'] as $rec_dist_comment18)
                                                    <li>{{ $rec_dist_comment18->rec_dist_comment18 }} - {{ $rec_dist_comment18->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Welfare records</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question19'] as $question19)
                                                    <li>{{ $question19->rec_dist_question19 }} - {{ $question19->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question19" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment19'] as $rec_dist_comment19)
                                                    <li>{{ $rec_dist_comment19->rec_dist_comment19 }} - {{ $rec_dist_comment19->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Budgets</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question20'] as $question20)
                                                    <li>{{ $question20->rec_dist_question20 }} - {{ $question20->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question20" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment20'] as $rec_dist_comment20)
                                                    <li>{{ $rec_dist_comment20->rec_dist_comment20 }} - {{ $rec_dist_comment20->count }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class=""> 
                                            <label for="" class="form-label">Periodic Financial Statements</label>
                                        </div>
                                        <div class="">
                                            <ul>
                                                @foreach ($query['question21'] as $question21)
                                                    <li>{{ $question21->rec_dist_question21 }} - {{ $question21->y }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="card graph mb-3 ml-4 col-12">
                                                <div class="card-body text-primary" id="question21" style="height: 400px; margin: 0 auto">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb">
                                            <label for="" class="form-label">Comments</label>
                                            <ul>
                                                @foreach ($query['rec_dist_comment21'] as $rec_dist_comment21)
                                                    <li>{{ $rec_dist_comment21->rec_dist_comment21 }} - {{ $rec_dist_comment21->count }}</li>
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
                        pointFormat: '{point.rec_dist_question1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question1}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question1;
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
                        pointFormat: '{point.rec_dist_question2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question2}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question2;
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
                        pointFormat: '{point.rec_dist_question3}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question3}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question3;
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
                        pointFormat: '{point.rec_dist_question4}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question4}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question4;
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
                        pointFormat: '{point.rec_dist_question5}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question5}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question5;
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
                        pointFormat: '{point.rec_dist_question6}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question6}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question6;
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
                        pointFormat: '{point.rec_dist_question7}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question7}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question7;
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
                        pointFormat: '{point.rec_dist_question8}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question8}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question8;
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
                        pointFormat: '{point.rec_dist_question9}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question9}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question9;
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
                        pointFormat: '{point.rec_dist_question10}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question10}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question10;
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
                        pointFormat: '{point.rec_dist_question11}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question11}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question11;
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
                        pointFormat: '{point.rec_dist_question12}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question12}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question12;
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
                        pointFormat: '{point.rec_dist_question13}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question13}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question13;
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

            // question14
            $(function(){
                Highcharts.chart('question14', {
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
                        pointFormat: '{point.rec_dist_question14}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question14}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question14;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question14'] ?>
                    }]
                    
                });
            });

            // question15
            $(function(){
                Highcharts.chart('question15', {
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
                        pointFormat: '{point.rec_dist_question15}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question15}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question15;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question15'] ?>
                    }]
                    
                });
            });

            // question16
            $(function(){
                Highcharts.chart('question16', {
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
                        pointFormat: '{point.rec_dist_question16}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question16}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question16;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question16'] ?>
                    }]
                    
                });
            });

            // question17
            $(function(){
                Highcharts.chart('question17', {
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
                        pointFormat: '{point.rec_dist_question17}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question17}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question17;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question17'] ?>
                    }]
                    
                });
            });

            // question18
            $(function(){
                Highcharts.chart('question18', {
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
                        pointFormat: '{point.rec_dist_question18}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question18}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question18;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question18'] ?>
                    }]
                    
                });
            });

            // question19
            $(function(){
                Highcharts.chart('question19', {
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
                        pointFormat: '{point.rec_dist_question19}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question19}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question19;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question19'] ?>
                    }]
                    
                });
            });

            // question20
            $(function(){
                Highcharts.chart('question20', {
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
                        pointFormat: '{point.rec_dist_question20}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question20}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question20;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question20'] ?>
                    }]
                    
                });
            });

            // question21
            $(function(){
                Highcharts.chart('question21', {
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
                        pointFormat: '{point.rec_dist_question21}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.rec_dist_question21}</b>: {point.percentage:.1f}%',
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
                            return this.rec_dist_question21;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question21'] ?>
                    }]
                    
                });
            });
        };
    </script>
    
@endsection
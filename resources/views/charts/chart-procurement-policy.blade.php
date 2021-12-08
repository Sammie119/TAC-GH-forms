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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>PROCUREMENT POLICY</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('procurement-policy') }}" id="fin_eva_bonitor" method="POST">
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
                                        <label for="" class="form-label">Knowledge of Policy</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">How conversant are officers with the Procurement Policy</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment1a'] as $fin_eva_b_comment1a)
                                                            <li>{{ $fin_eva_b_comment1a->fin_eva_b_comment1a }} - {{ $fin_eva_b_comment1a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Committee existence?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1b'] as $question1b)
                                                            <li>{{ $question1b->fin_eva_b_question1b }} - {{ $question1b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment1b'] as $fin_eva_b_comment1b)
                                                            <li>{{ $fin_eva_b_comment1b->fin_eva_b_comment1b }} - {{ $fin_eva_b_comment1b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Committee involvement in acquisitions / purchases</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1c'] as $question1c)
                                                            <li>{{ $question1c->fin_eva_b_question1c }} - {{ $question1c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment1c'] as $fin_eva_b_comment1c)
                                                            <li>{{ $fin_eva_b_comment1c->fin_eva_b_comment1c }} - {{ $fin_eva_b_comment1c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Challenges between Procurement and Finance Committees if any</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1d'] as $question1d)
                                                            <li>{{ $question1d->fin_eva_b_question1d }} - {{ $question1d->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1d" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment1d'] as $fin_eva_b_comment1d)
                                                            <li>{{ $fin_eva_b_comment1d->fin_eva_b_comment1d }} - {{ $fin_eva_b_comment1d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li> 
                                    
                                    <li>
                                        <label for="" class="form-label">Acquisition of Fixed Assets</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">How is sourcing done?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment2a'] as $fin_eva_b_comment2a)
                                                            <li>{{ $fin_eva_b_comment2a->fin_eva_b_comment2a }} - {{ $fin_eva_b_comment2a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Is sourcing backed by supporting documents?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question2b'] as $question2b)
                                                            <li>{{ $question2b->fin_eva_b_question2b }} - {{ $question2b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question2b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment2b'] as $fin_eva_b_comment2b)
                                                            <li>{{ $fin_eva_b_comment2b->fin_eva_b_comment2b }} - {{ $fin_eva_b_comment2b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Is selection of source credible? - from Presbytery minutes</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question2c'] as $question2c)
                                                            <li>{{ $question2c->fin_eva_b_question2c }} - {{ $question2c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question2c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment2c'] as $fin_eva_b_comment2c)
                                                            <li>{{ $fin_eva_b_comment2c->fin_eva_b_comment2c }} - {{ $fin_eva_b_comment2c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is the approval process complied with?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment2d'] as $fin_eva_b_comment2d)
                                                            <li>{{ $fin_eva_b_comment2d->fin_eva_b_comment2d }} - {{ $fin_eva_b_comment2d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>   
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Exceptional cases</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Has there been any one-off acquisition / expenditure?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3a'] as $question3a)
                                                            <li>{{ $question3a->fin_eva_b_question3a }} - {{ $question3a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment3a'] as $fin_eva_b_comment3a)
                                                            <li>{{ $fin_eva_b_comment3a->fin_eva_b_comment3a }} - {{ $fin_eva_b_comment3a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is a one-off acquisition undertaken</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment3b'] as $fin_eva_b_comment3b)
                                                            <li>{{ $fin_eva_b_comment3b->fin_eva_b_comment3b }} - {{ $fin_eva_b_comment3b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Was the one-off expenditure an emergency? State the occurences</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3c'] as $question3c)
                                                            <li>{{ $question3c->fin_eva_b_question3c }} - {{ $question3c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment3c'] as $fin_eva_b_comment3c)
                                                            <li>{{ $fin_eva_b_comment3c->fin_eva_b_comment3c }} - {{ $fin_eva_b_comment3c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How has Finance been involved in a one-off procurement / expenditure</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment3d'] as $fin_eva_b_comment3d)
                                                            <li>{{ $fin_eva_b_comment3d->fin_eva_b_comment3d }} - {{ $fin_eva_b_comment3d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Planning for Procurements</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Does the level / unit plan for procurements?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question4a'] as $question4a)
                                                            <li>{{ $question4a->fin_eva_b_question4a }} - {{ $question4a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question4a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment4a'] as $fin_eva_b_comment4a)
                                                            <li>{{ $fin_eva_b_comment4a->fin_eva_b_comment4a }} - {{ $fin_eva_b_comment4a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is the plan undertaken and documented?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment4b'] as $fin_eva_b_comment4b)
                                                            <li>{{ $fin_eva_b_comment4b->fin_eva_b_comment4b }} - {{ $fin_eva_b_comment4b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Does procurement plans include total costs ie transport, installation etc?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question4c'] as $question4c)
                                                            <li>{{ $question4c->fin_eva_b_question4c }} - {{ $question4c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question4c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment4c'] as $fin_eva_b_comment4c)
                                                            <li>{{ $fin_eva_b_comment4c->fin_eva_b_comment4c }} - {{ $fin_eva_b_comment4c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Procurement Process Test Check</label>
                                        <ol type="a">
                                            <label for="" class="form-label">For items procured within evaluation scope, state whether</label>
                                            <li>
                                                <label for="" class="form-label">the procured assets exist</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question5a'] as $question5a)
                                                            <li>{{ $question5a->fin_eva_b_question5a }} - {{ $question5a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question5a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment5a'] as $fin_eva_b_comment5a)
                                                            <li>{{ $fin_eva_b_comment5a->fin_eva_b_comment5a }} - {{ $fin_eva_b_comment5a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">procured assets followed the policy and process</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question5b'] as $question5b)
                                                            <li>{{ $question5b->fin_eva_b_question5b }} - {{ $question5b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question5b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment5b'] as $fin_eva_b_comment5b)
                                                            <li>{{ $fin_eva_b_comment5b->fin_eva_b_comment5b }} - {{ $fin_eva_b_comment5b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">assess the current state of the assets under review</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question5c'] as $question5c)
                                                            <li>{{ $question5c->fin_eva_b_question5c }} - {{ $question5c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question5c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment5c'] as $fin_eva_b_comment5c)
                                                            <li>{{ $fin_eva_b_comment5c->fin_eva_b_comment5c }} - {{ $fin_eva_b_comment5c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">report on observations</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment5d'] as $fin_eva_b_comment5d)
                                                            <li>{{ $fin_eva_b_comment5d->fin_eva_b_comment5d }} - {{ $fin_eva_b_comment5d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Compliance with Approval limits</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Max of GHC 3,000 for Assembly / District Procurement Committee</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6a'] as $question6a)
                                                            <li>{{ $question6a->fin_eva_b_question6a }} - {{ $question6a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment6a'] as $fin_eva_b_comment6a)
                                                            <li>{{ $fin_eva_b_comment6a->fin_eva_b_comment6a }} - {{ $fin_eva_b_comment6a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Above GHC 3,000 for Assembly / District Presbytery</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6b'] as $question6b)
                                                            <li>{{ $question6b->fin_eva_b_question6b }} - {{ $question6b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment6b'] as $fin_eva_b_comment6b)
                                                            <li>{{ $fin_eva_b_comment6b->fin_eva_b_comment6b }} - {{ $fin_eva_b_comment6b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Was procurement at arms length?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6c'] as $question6c)
                                                            <li>{{ $question6c->fin_eva_b_question6c }} - {{ $question6c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment6c'] as $fin_eva_b_comment6c)
                                                            <li>{{ $fin_eva_b_comment6c->fin_eva_b_comment6c }} - {{ $fin_eva_b_comment6c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Ceasure of Contract</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Has a contractor ever decided to cease continuation of contract?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question7a'] as $question7a)
                                                            <li>{{ $question7a->fin_eva_b_question7a }} - {{ $question7a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question7a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment7a'] as $fin_eva_b_comment7a)
                                                            <li>{{ $fin_eva_b_comment7a->fin_eva_b_comment7a }} - {{ $fin_eva_b_comment7a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">What caused the decision?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment7b'] as $fin_eva_b_comment7b)
                                                            <li>{{ $fin_eva_b_comment7b->fin_eva_b_comment7b }} - {{ $fin_eva_b_comment7b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How did this decision affect the contract or procurement process</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment7c'] as $fin_eva_b_comment7c)
                                                            <li>{{ $fin_eva_b_comment7c->fin_eva_b_comment7c }} - {{ $fin_eva_b_comment7c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How did the unit address any challenges arising from the process?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment7d'] as $fin_eva_b_comment7d)
                                                            <li>{{ $fin_eva_b_comment7d->fin_eva_b_comment7d }} - {{ $fin_eva_b_comment7d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Grants and Appeals</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Has the unit ever applied for a grant from HQ? Give evidence</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question8a'] as $question8a)
                                                            <li>{{ $question8a->fin_eva_b_question8a }} - {{ $question8a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question8a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment8a'] as $fin_eva_b_comment8a)
                                                            <li>{{ $fin_eva_b_comment8a->fin_eva_b_comment8a }} - {{ $fin_eva_b_comment8a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Was the grant granted?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question8b'] as $question8b)
                                                            <li>{{ $question8b->fin_eva_b_question8b }} - {{ $question8b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question8b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_b_comment8b'] as $fin_eva_b_comment8b)
                                                            <li>{{ $fin_eva_b_comment8b->fin_eva_b_comment8b }} - {{ $fin_eva_b_comment8b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
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

            // question1b
            $(function(){
                Highcharts.chart('question1b', {
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
                        pointFormat: '{point.fin_eva_b_question1b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question1b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question1b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1b'] ?>
                    }]
                    
                });
            });

            // question1c
            $(function(){
                Highcharts.chart('question1c', {
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
                        pointFormat: '{point.fin_eva_b_question1c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question1c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question1c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1c'] ?>
                    }]
                    
                });
            });

            // question1d
            $(function(){
                Highcharts.chart('question1d', {
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
                        pointFormat: '{point.fin_eva_b_question1d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question1d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question1d;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1d'] ?>
                    }]
                    
                });
            });

            // question2b
            $(function(){
                Highcharts.chart('question2b', {
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
                        pointFormat: '{point.fin_eva_b_question2b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question2b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question2b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question2b'] ?>
                    }]
                    
                });
            });

            // question2c
            $(function(){
                Highcharts.chart('question2c', {
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
                        pointFormat: '{point.fin_eva_b_question2c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question2c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question2c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question2c'] ?>
                    }]
                    
                });
            });

            // question3a
            $(function(){
                Highcharts.chart('question3a', {
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
                        pointFormat: '{point.fin_eva_b_question3a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question3a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question3a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3a'] ?>
                    }]
                    
                });
            });

            // question3c
            $(function(){
                Highcharts.chart('question3c', {
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
                        pointFormat: '{point.fin_eva_b_question3c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question3c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question3c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3c'] ?>
                    }]
                    
                });
            });

            // question4a
            $(function(){
                Highcharts.chart('question4a', {
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
                        pointFormat: '{point.fin_eva_b_question4a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question4a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question4a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question4a'] ?>
                    }]
                    
                });
            });

            // question4c
            $(function(){
                Highcharts.chart('question4c', {
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
                        pointFormat: '{point.fin_eva_b_question4c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question4c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question4c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question4c'] ?>
                    }]
                    
                });
            });

            // question5a
            $(function(){
                Highcharts.chart('question5a', {
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
                        pointFormat: '{point.fin_eva_b_question5a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question5a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question5a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question5a'] ?>
                    }]
                    
                });
            });

            // question5b
            $(function(){
                Highcharts.chart('question5b', {
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
                        pointFormat: '{point.fin_eva_b_question5b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question5b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question5b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question5b'] ?>
                    }]
                    
                });
            });

            // question5c
            $(function(){
                Highcharts.chart('question5c', {
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
                        pointFormat: '{point.fin_eva_b_question5c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question5c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question5c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question5c'] ?>
                    }]
                    
                });
            });

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
                        pointFormat: '{point.fin_eva_b_question6a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question6a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question6a;
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
                        pointFormat: '{point.fin_eva_b_question6a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question6a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question6a;
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
                        pointFormat: '{point.fin_eva_b_question6b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question6b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question6b;
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
                        pointFormat: '{point.fin_eva_b_question6c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question6c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question6c;
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
                        pointFormat: '{point.fin_eva_b_question7a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question7a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question7a;
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
                        pointFormat: '{point.fin_eva_b_question8a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question8a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question8a;
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

            // question8b
            $(function(){
                Highcharts.chart('question8b', {
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
                        pointFormat: '{point.fin_eva_b_question8b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_b_question8b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_b_question8b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question8b'] ?>
                    }]
                    
                });
            });

        };
    </script>
    
@endsection
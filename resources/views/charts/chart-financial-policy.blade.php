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
                        {{-- <div class="card-header d-flex justify-content-center"><h4>FINANCIAL POLICY</h4></div> --}}
                        <div class="card-body">
                            <form action="{{ route('financial-policy') }}" id="fin_eva_aonitor" method="POST">
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
                                        <label for="" class="form-label">Composition of Finance Committee</label>
                                        
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Appointment</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1a'] as $question1a)
                                                            <li>{{ $question1a->fin_eva_a_question1a }} - {{ $question1a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment1a'] as $fin_eva_a_comment1a)
                                                            <li>{{ $fin_eva_a_comment1a->fin_eva_a_comment1a }} - {{ $fin_eva_a_comment1a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Number (min of 3, max of 5 or 7)</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1b'] as $question1b)
                                                            <li>{{ $question1b->fin_eva_a_question1b }} - {{ $question1b->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment1b'] as $fin_eva_a_comment1b)
                                                            <li>{{ $fin_eva_a_comment1b->fin_eva_a_comment1b }} - {{ $fin_eva_a_comment1b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Term of Office (2 or 4 years renewable for 2 terms)</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1c'] as $question1c)
                                                            <li>{{ $question1c->fin_eva_a_question1c }} - {{ $question1c->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment1c'] as $fin_eva_a_comment1c)
                                                            <li>{{ $fin_eva_a_comment1c->fin_eva_a_comment1c }} - {{ $fin_eva_a_comment1c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Positions</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1d'] as $question1d)
                                                            <li>{{ $question1d->fin_eva_a_question1d }} - {{ $question1d->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment1d'] as $fin_eva_a_comment1d)
                                                            <li>{{ $fin_eva_a_comment1d->fin_eva_a_comment1d }} - {{ $fin_eva_a_comment1d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Participation in Presbytery meetings (Constitution)</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1e'] as $question1e)
                                                            <li>{{ $question1e->fin_eva_a_question1e }} - {{ $question1e->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1e" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment1e'] as $fin_eva_a_comment1e)
                                                            <li>{{ $fin_eva_a_comment1e->fin_eva_a_comment1e }} - {{ $fin_eva_a_comment1e->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Signatories</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1f'] as $question1f)
                                                            <li>{{ $question1f->fin_eva_a_question1f }} - {{ $question1f->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1f" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment1f'] as $fin_eva_a_comment1f)
                                                            <li>{{ $fin_eva_a_comment1f->fin_eva_a_comment1f }} - {{ $fin_eva_a_comment1f->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Discharge of Duties</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question1g'] as $question1g)
                                                            <li>{{ $question1g->fin_eva_a_question1g }} - {{ $question1g->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question1g" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment1g'] as $fin_eva_a_comment1g)
                                                            <li>{{ $fin_eva_a_comment1g->fin_eva_a_comment1g }} - {{ $fin_eva_a_comment1g->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li> 
                                    
                                    <li>
                                        <label for="" class="form-label">Budgets</label>
                
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Availability</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question2a'] as $question2a)
                                                            <li>{{ $question2a->fin_eva_a_question2a }} - {{ $question2a->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question2a" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment2a'] as $fin_eva_a_comment2a)
                                                            <li>{{ $fin_eva_a_comment2a->fin_eva_a_comment2a }} - {{ $fin_eva_a_comment2a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Minutes on rectification / approval process</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question2b'] as $question2b)
                                                            <li>{{ $question2b->fin_eva_a_question2b }} - {{ $question2b->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment2b'] as $fin_eva_a_comment2b)
                                                            <li>{{ $fin_eva_a_comment2b->fin_eva_a_comment2b }} - {{ $fin_eva_a_comment2b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Budget evaluation</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question2c'] as $question2c)
                                                            <li>{{ $question2c->fin_eva_a_question2c }} - {{ $question2c->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment2c'] as $fin_eva_a_comment2c)
                                                            <li>{{ $fin_eva_a_comment2c->fin_eva_a_comment2c }} - {{ $fin_eva_a_comment2c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Sources of funds</label>
                
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Tithe (how often is it raised?)</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3a'] as $question3a)
                                                            <li>{{ $question3a->fin_eva_a_question3a }} - {{ $question3a->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment3a'] as $fin_eva_a_comment3a)
                                                            <li>{{ $fin_eva_a_comment3a->fin_eva_a_comment3a }} - {{ $fin_eva_a_comment3a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Thanksgiving</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3b'] as $question3b)
                                                            <li>{{ $question3b->fin_eva_a_question3b }} - {{ $question3b->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3b" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3b'] as $fin_eva_a_comment3b)
                                                            <li>{{ $fin_eva_a_comment3b->fin_eva_a_comment3b }} - {{ $fin_eva_a_comment3b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Donations, Gifts and Appeal for funds</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3c'] as $question3c)
                                                            <li>{{ $question3c->fin_eva_a_question3c }} - {{ $question3c->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment3c'] as $fin_eva_a_comment3c)
                                                            <li>{{ $fin_eva_a_comment3c->fin_eva_a_comment3c }} - {{ $fin_eva_a_comment3c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Dues</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3d'] as $question3d)
                                                            <li>{{ $question3d->fin_eva_a_question3d }} - {{ $question3d->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3d" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3d'] as $fin_eva_a_comment3d)
                                                            <li>{{ $fin_eva_a_comment3d->fin_eva_a_comment3d }} - {{ $fin_eva_a_comment3d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Sale of Souvenirs</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3e'] as $question3e)
                                                            <li>{{ $question3e->fin_eva_a_question3e }} - {{ $question3e->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3e" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3e'] as $fin_eva_a_comment3e)
                                                            <li>{{ $fin_eva_a_comment3e->fin_eva_a_comment3e }} - {{ $fin_eva_a_comment3e->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Movement Meeting Proceeds and Programmes</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3f'] as $question3f)
                                                            <li>{{ $question3f->fin_eva_a_question3f }} - {{ $question3f->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3f" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3f'] as $fin_eva_a_comment3f)
                                                            <li>{{ $fin_eva_a_comment3f->fin_eva_a_comment3f }} - {{ $fin_eva_a_comment3f->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Fund raisings / annual harvests / project funds</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3g'] as $question3g)
                                                            <li>{{ $question3g->fin_eva_a_question3g }} - {{ $question3g->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3g" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3g'] as $fin_eva_a_comment3g)
                                                            <li>{{ $fin_eva_a_comment3g->fin_eva_a_comment3g }} - {{ $fin_eva_a_comment3g->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Week Celebrations</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3h'] as $question3h)
                                                            <li>{{ $question3h->fin_eva_a_question3h }} - {{ $question3h->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3h" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3h'] as $fin_eva_a_comment3h)
                                                            <li>{{ $fin_eva_a_comment3h->fin_eva_a_comment3h }} - {{ $fin_eva_a_comment3h->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">National Special Programmes e.g. 21 days</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question3i'] as $question3i)
                                                            <li>{{ $question3i->fin_eva_a_question3i }} - {{ $question3i->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question3i" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment3i'] as $fin_eva_a_comment3i)
                                                            <li>{{ $fin_eva_a_comment3i->fin_eva_a_comment3i }} - {{ $fin_eva_a_comment3i->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Revenue Monitoring</label>
                
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Tithes and Thanksgiving: How is remittance closed?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question4a'] as $question4a)
                                                            <li>{{ $question4a->fin_eva_a_question4a }} - {{ $question4a->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment4a'] as $fin_eva_a_comment4a)
                                                            <li>{{ $fin_eva_a_comment4a->fin_eva_a_comment4a }} - {{ $fin_eva_a_comment4a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Is it tithes and offering or tithe and thanksgiving?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment4b'] as $fin_eva_a_comment4b)
                                                            <li>{{ $fin_eva_a_comment4b->fin_eva_a_comment4b }} - {{ $fin_eva_a_comment4b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">What is the status of remittances</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">tithes and thanksgiving</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment4c1'] as $fin_eva_a_comment4c1)
                                                                    <li>{{ $fin_eva_a_comment4c1->fin_eva_a_comment4c1 }} - {{ $fin_eva_a_comment4c1->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">week celebrations</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment4c2'] as $fin_eva_a_comment4c2)
                                                                    <li>{{ $fin_eva_a_comment4c2->fin_eva_a_comment4c2 }} - {{ $fin_eva_a_comment4c2->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">conventions</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment4c3'] as $fin_eva_a_comment4c3)
                                                                    <li>{{ $fin_eva_a_comment4c3->fin_eva_a_comment4c3 }} - {{ $fin_eva_a_comment4c3->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How are appeals raised? - Review from Spot check if any</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment4d'] as $fin_eva_a_comment4d)
                                                            <li>{{ $fin_eva_a_comment4d->fin_eva_a_comment4d }} - {{ $fin_eva_a_comment4d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How are donations received and utilised?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment4e'] as $fin_eva_a_comment4e)
                                                            <li>{{ $fin_eva_a_comment4e->fin_eva_a_comment4e }} - {{ $fin_eva_a_comment4e->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is the recording process for all income lines?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment4f'] as $fin_eva_a_comment4f)
                                                            <li>{{ $fin_eva_a_comment4f->fin_eva_a_comment4f }} - {{ $fin_eva_a_comment4f->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Expenditure</label>
                
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">How is expenditure approval process followed?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment5a'] as $fin_eva_a_comment5a)
                                                            <li>{{ $fin_eva_a_comment5a->fin_eva_a_comment5a }} - {{ $fin_eva_a_comment5a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">What has been the reaction of recipients of cashflows on</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">Disbursements from imprest</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment5b1'] as $fin_eva_a_comment5b1)
                                                                    <li>{{ $fin_eva_a_comment5b1->fin_eva_a_comment5b1 }} - {{ $fin_eva_a_comment5b1->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">Disbursements from income received after service</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment5b2'] as $fin_eva_a_comment5b2)
                                                                    <li>{{ $fin_eva_a_comment5b2->fin_eva_a_comment5b2 }} - {{ $fin_eva_a_comment5b2->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">Overspending of budget</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment5b3'] as $fin_eva_a_comment5b3)
                                                                    <li>{{ $fin_eva_a_comment5b3->fin_eva_a_comment5b3 }} - {{ $fin_eva_a_comment5b3->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">Expenditure review / request for supporting documents</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment5b4'] as $fin_eva_a_comment5b4)
                                                                    <li>{{ $fin_eva_a_comment5b4->fin_eva_a_comment5b4 }} - {{ $fin_eva_a_comment5b4->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is the imprest system operated?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment5c'] as $fin_eva_a_comment5c)
                                                            <li>{{ $fin_eva_a_comment5c->fin_eva_a_comment5c }} - {{ $fin_eva_a_comment5c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Custody of Funds</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Is MOMO operational at the assembly?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6a'] as $question6a)
                                                            <li>{{ $question6a->fin_eva_a_question6a }} - {{ $question6a->y }}</li>
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
                                                        @foreach ($query['fin_eva_a_comment6a'] as $fin_eva_a_comment6a)
                                                            <li>{{ $fin_eva_a_comment6a->fin_eva_a_comment6a }} - {{ $fin_eva_a_comment6a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is it operated and monitored?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment6b'] as $fin_eva_a_comment6b)
                                                            <li>{{ $fin_eva_a_comment6b->fin_eva_a_comment6b }} - {{ $fin_eva_a_comment6b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How are funds kept</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">at the bank?</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question6c1'] as $question6c1)
                                                                    <li>{{ $question6c1->fin_eva_a_question6c1 }} - {{ $question6c1->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question6c1" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment6c1'] as $fin_eva_a_comment6c1)
                                                                    <li>{{ $fin_eva_a_comment6c1->fin_eva_a_comment6c1 }} - {{ $fin_eva_a_comment6c1->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">with the treasurer?</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question6c2'] as $question6c2)
                                                                    <li>{{ $question6c2->fin_eva_a_question6c2 }} - {{ $question6c2->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question6c2" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment6c2'] as $fin_eva_a_comment6c2)
                                                                    <li>{{ $fin_eva_a_comment6c2->fin_eva_a_comment6c2 }} - {{ $fin_eva_a_comment6c2->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">How are direct deposits by members accounted for?</label>
                                                        <div class="mb">
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment6c3'] as $fin_eva_a_comment6c3)
                                                                    <li>{{ $fin_eva_a_comment6c3->fin_eva_a_comment6c3 }} - {{ $fin_eva_a_comment6c3->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Does movements keep their funds?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6d'] as $question6d)
                                                            <li>{{ $question6d->fin_eva_a_question6d }} - {{ $question6d->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6d" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment6d'] as $fin_eva_a_comment6d)
                                                            <li>{{ $fin_eva_a_comment6d->fin_eva_a_comment6d }} - {{ $fin_eva_a_comment6d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Is the signatory policy complied with?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question6e'] as $question6e)
                                                            <li>{{ $question6e->fin_eva_a_question6e }} - {{ $question6e->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question6e" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment6e'] as $fin_eva_a_comment6e)
                                                            <li>{{ $fin_eva_a_comment6e->fin_eva_a_comment6e }} - {{ $fin_eva_a_comment6e->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Allowances For Ministers</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Out of Station / Honourarium</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">Both paid by Area, District and Local visited</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7a1'] as $question7a1)
                                                                    <li>{{ $question7a1->fin_eva_a_question7a1 }} - {{ $question7a1->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7a1" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7a1'] as $fin_eva_a_comment7a1)
                                                                    <li>{{ $fin_eva_a_comment7a1->fin_eva_a_comment7a1 }} - {{ $fin_eva_a_comment7a1->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">Beneficiary Obligation</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7a2'] as $question7a2)
                                                                    <li>{{ $question7a2->fin_eva_a_question7a2 }} - {{ $question7a2->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7a2" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7a2'] as $fin_eva_a_comment7a2)
                                                                    <li>{{ $fin_eva_a_comment7a2->fin_eva_a_comment7a2 }} - {{ $fin_eva_a_comment7a2->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Car / Maintenance</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">Beneficiary obligation</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7b1'] as $question7b1)
                                                                    <li>{{ $question7b1->fin_eva_a_question7b1 }} - {{ $question7b1->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7b1" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7b1'] as $fin_eva_a_comment7b1)
                                                                    <li>{{ $fin_eva_a_comment7b1->fin_eva_a_comment7b1 }} - {{ $fin_eva_a_comment7b1->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">As part of allowances</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7b2'] as $question7b2)
                                                                    <li>{{ $question7b2->fin_eva_a_question7b2 }} - {{ $question7b2->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7b2" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7b2'] as $fin_eva_a_comment7b2)
                                                                    <li>{{ $fin_eva_a_comment7b2->fin_eva_a_comment7b2 }} - {{ $fin_eva_a_comment7b2->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                
                                                    <li>
                                                        <label for="" class="form-label">Both as allowances and contribution as beneficiary obligation</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7b3'] as $question7b3)
                                                                    <li>{{ $question7b3->fin_eva_a_question7b3 }} - {{ $question7b3->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7b3" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7b3'] as $fin_eva_a_comment7b3)
                                                                    <li>{{ $fin_eva_a_comment7b3->fin_eva_a_comment7b3 }} - {{ $fin_eva_a_comment7b3->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            
                                            <li>
                                                <label for="" class="form-label">Transportation</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">Beneficiary obligation compliance</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7c'] as $question7c)
                                                                    <li>{{ $question7c->fin_eva_a_question7c }} - {{ $question7c->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7c" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7c'] as $fin_eva_a_comment7c)
                                                                    <li>{{ $fin_eva_a_comment7c->fin_eva_a_comment7c }} - {{ $fin_eva_a_comment7c->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            
                                            <li>
                                                <label for="" class="form-label">Responsibility</label>
                                                <ol>
                                                    <li>
                                                        <label for="" class="form-label">Paid by HQ</label>
                                                        <div class="">
                                                            <ul>
                                                                @foreach ($query['question7d'] as $question7d)
                                                                    <li>{{ $question7d->fin_eva_a_question7d }} - {{ $question7d->y }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card graph mb-3 ml-4 col-12">
                                                                <div class="card-body text-primary" id="question7d" style="height: 400px; margin: 0 auto">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                
                                                        <div class="mb">
                                                            <label for="" class="form-label">Comments</label>
                                                            <ul>
                                                                @foreach ($query['fin_eva_a_comment7d'] as $fin_eva_a_comment7d)
                                                                    <li>{{ $fin_eva_a_comment7d->fin_eva_a_comment7d }} - {{ $fin_eva_a_comment7d->count }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                
                                    <li>
                                        <label for="" class="form-label">Welfare</label>
                                        <ol type="a">
                                            <li>
                                                <label for="" class="form-label">Does the assembly operate a welfare scheme?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8a'] as $fin_eva_a_comment8a)
                                                            <li>{{ $fin_eva_a_comment8a->fin_eva_a_comment8a }} - {{ $fin_eva_a_comment8a->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">How is the welfare process carried out?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8b'] as $fin_eva_a_comment8b)
                                                            <li>{{ $fin_eva_a_comment8b->fin_eva_a_comment8b }} - {{ $fin_eva_a_comment8b->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>  
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Is there a committee responsible for the welfare scheme?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question8c'] as $question8c)
                                                            <li>{{ $question8c->fin_eva_a_question8c }} - {{ $question8c->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question8c" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8c'] as $fin_eva_a_comment8c)
                                                            <li>{{ $fin_eva_a_comment8c->fin_eva_a_comment8c }} - {{ $fin_eva_a_comment8c->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Does the welfare scheme operate a separate bank account?</label>
                                                <div class="">
                                                    <ul>
                                                        @foreach ($query['question8d'] as $question8d)
                                                            <li>{{ $question8d->fin_eva_a_question8d }} - {{ $question8d->y }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card graph mb-3 ml-4 col-12">
                                                        <div class="card-body text-primary" id="question8d" style="height: 400px; margin: 0 auto">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="mb">
                                                    <label for="" class="form-label">Comments</label>
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8d'] as $fin_eva_a_comment8d)
                                                            <li>{{ $fin_eva_a_comment8d->fin_eva_a_comment8d }} - {{ $fin_eva_a_comment8d->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">Who are the signatories to the Welfare Scheme account?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8e'] as $fin_eva_a_comment8e)
                                                            <li>{{ $fin_eva_a_comment8e->fin_eva_a_comment8e }} - {{ $fin_eva_a_comment8e->count }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <label for="" class="form-label">What are the challenges of the welfare scheme?</label>
                                                <div class="mb">
                                                    <ul>
                                                        @foreach ($query['fin_eva_a_comment8f'] as $fin_eva_a_comment8f)
                                                            <li>{{ $fin_eva_a_comment8f->fin_eva_a_comment8f }} - {{ $fin_eva_a_comment8f->count }}</li>
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

            // question1a
            $(function(){
                Highcharts.chart('question1a', {
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
                        pointFormat: '{point.fin_eva_a_question1a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1a'] ?>
                    }]
                    
                });
            });

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
                        pointFormat: '{point.fin_eva_a_question1b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1b;
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
                        pointFormat: '{point.fin_eva_a_question1c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1c;
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
                        pointFormat: '{point.fin_eva_a_question1d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1d;
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

            // question1e
            $(function(){
                Highcharts.chart('question1e', {
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
                        pointFormat: '{point.fin_eva_a_question1e}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1e}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1e;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1e'] ?>
                    }]
                    
                });
            });

            // question1f
            $(function(){
                Highcharts.chart('question1f', {
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
                        pointFormat: '{point.fin_eva_a_question1f}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1f}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1f;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1f'] ?>
                    }]
                    
                });
            });

            // question1g
            $(function(){
                Highcharts.chart('question1g', {
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
                        pointFormat: '{point.fin_eva_a_question1g}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question1g}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question1g;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question1g'] ?>
                    }]
                    
                });
            });

            // question2a
            $(function(){
                Highcharts.chart('question2a', {
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
                        pointFormat: '{point.fin_eva_a_question2a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question2a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question2a;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question2a'] ?>
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
                        pointFormat: '{point.fin_eva_a_question2b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question2b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question2b;
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
                        pointFormat: '{point.fin_eva_a_question2c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question2c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question2c;
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
                        pointFormat: '{point.fin_eva_a_question3a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3a;
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

            // question3b
            $(function(){
                Highcharts.chart('question3b', {
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
                        pointFormat: '{point.fin_eva_a_question3b}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3b}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3b;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3b'] ?>
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
                        pointFormat: '{point.fin_eva_a_question3c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3c;
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

            // question3d
            $(function(){
                Highcharts.chart('question3d', {
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
                        pointFormat: '{point.fin_eva_a_question3d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3d;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3d'] ?>
                    }]
                    
                });
            });

            // question3e
            $(function(){
                Highcharts.chart('question3e', {
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
                        pointFormat: '{point.fin_eva_a_question3e}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3e}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3e;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3e'] ?>
                    }]
                    
                });
            });

            // question3f
            $(function(){
                Highcharts.chart('question3f', {
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
                        pointFormat: '{point.fin_eva_a_question3f}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3f}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3f;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3f'] ?>
                    }]
                    
                });
            });

            // question3g
            $(function(){
                Highcharts.chart('question3g', {
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
                        pointFormat: '{point.fin_eva_a_question3g}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3g}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3g;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3g'] ?>
                    }]
                    
                });
            });

            // question3h
            $(function(){
                Highcharts.chart('question3h', {
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
                        pointFormat: '{point.fin_eva_a_question3h}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3h}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3h;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3h'] ?>
                    }]
                    
                });
            });

            // question3i
            $(function(){
                Highcharts.chart('question3i', {
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
                        pointFormat: '{point.fin_eva_a_question3i}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question3i}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question3i;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question3i'] ?>
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
                        pointFormat: '{point.fin_eva_a_question4a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question4a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question4a;
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
                        pointFormat: '{point.fin_eva_a_question6a}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question6a}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question6a;
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

            // question6c1
            $(function(){
                Highcharts.chart('question6c1', {
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
                        pointFormat: '{point.fin_eva_a_question6c1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question6c1}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question6c1;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6c1'] ?>
                    }]
                    
                });
            });

            // question6c2
            $(function(){
                Highcharts.chart('question6c2', {
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
                        pointFormat: '{point.fin_eva_a_question6c2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question6c2}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question6c2;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question6c2'] ?>
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
                        pointFormat: '{point.fin_eva_a_question6d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question6d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question6d;
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
                        pointFormat: '{point.fin_eva_a_question6e}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question6e}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question6e;
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

            // question7a1
            $(function(){
                Highcharts.chart('question7a1', {
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
                        pointFormat: '{point.fin_eva_a_question7a1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7a1}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7a1;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7a1'] ?>
                    }]
                    
                });
            });

            // question7a2
            $(function(){
                Highcharts.chart('question7a2', {
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
                        pointFormat: '{point.fin_eva_a_question7a2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7a2}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7a2;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7a2'] ?>
                    }]
                    
                });
            });

            // question7b1
            $(function(){
                Highcharts.chart('question7b1', {
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
                        pointFormat: '{point.fin_eva_a_question7b1}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7b1}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7b1;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7b1'] ?>
                    }]
                    
                });
            });

            // question7b2
            $(function(){
                Highcharts.chart('question7b2', {
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
                        pointFormat: '{point.fin_eva_a_question7b2}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7b2}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7b2;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7b2'] ?>
                    }]
                    
                });
            });

            // question7b3
            $(function(){
                Highcharts.chart('question7b3', {
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
                        pointFormat: '{point.fin_eva_a_question7b3}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7b3}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7b3;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question7b3'] ?>
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
                        pointFormat: '{point.fin_eva_a_question7c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7c;
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
                        pointFormat: '{point.fin_eva_a_question7d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question7d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question7d;
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


            // question8c
            $(function(){
                Highcharts.chart('question8c', {
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
                        pointFormat: '{point.fin_eva_a_question8c}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question8c}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question8c;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question8c'] ?>
                    }]
                    
                });
            });

            // question8d
            $(function(){
                Highcharts.chart('question8d', {
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
                        pointFormat: '{point.fin_eva_a_question8d}: <b>{point.percentage:.1f}%</b>'
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
                                format: '<b>{point.fin_eva_a_question8d}</b>: {point.percentage:.1f}%',
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
                            return this.fin_eva_a_question8d;
                        },
                        itemStyle: {
                            fontWeight: 'bold',
                            fontSize: '20px'
                        }
                        
                    },
                    series: [{
                        name: 'Results',
                        colorByPoint: true,
                        data: <?= $query['question8d'] ?>
                    }]
                    
                });
            });


        };
    </script>
    
@endsection
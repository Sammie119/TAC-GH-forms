@extends('layouts.app')

@section('title', 'TAC-forms | Home')

@section('content')
    
    <div class="container mx-auto">
        <h3 class="login-heading mb-4 mt-4 d-flex justify-content-center">You are Welcome {{ ucfirst(Auth()->user()->name) }}</h3>
        <div class="row">
            <h4>Report Statistics</h4>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body"><h3>{{ $data['total'] }}</h3>Total<br>Records</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['localLevelQuestion'] }}</h3>Local Level Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['localEvangelism'] }}</h3>Local <br>Evangelism</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['memberReport'] }}</h3>Member's <br>Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['monitorReport'] }}</h3>Monister's <br> Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['areaHeadReport'] }}</h3>Superintendent's Visitation Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtPastorReport'] }}</h3>District Pastor's Visitation Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['communityReport'] }}</h3>Community Impression Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['areaSupQuestions'] }}</h3>Superintendent's Direct Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtPastorQuestion'] }}</h3>District Pastor's Direct Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtLevelMonoter'] }}</h3>District Officer's Level Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['fin_policy'] }}</h3>Financial Policy Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['pro_policy'] }}</h3>Procurement Policy Report</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['rec_booking_area'] }}</h3>Recording and Book Keeping - Area</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['rec_booking_dist'] }}</h3>Recording and Book Keeping - District</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['rec_booking_loc'] }}</h3>Recording and Book Keeping - Local</div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['pas_assessment'] }}</h3>Pastors Assessment Questionnaire</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['sup_assessment'] }}</h3>Sup Assessment Questionnaire</div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
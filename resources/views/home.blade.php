@extends('layouts.app')

@section('title', 'TAC-forms | Home')

@section('content')
    
    <div class="container mx-auto">
        <h3 class="login-heading mb-4">You are Welcome {{ ucfirst(Auth()->user()->name) }}</h3>
        <div class="row">
            <h4>Report Statistics</h4>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['users'] }} Users</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">Users</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['total'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">Total Records</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['localLevelQuestion'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">LOCAL LEVEL QUESTIONNAIRE</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['localEvangelism'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">LOCAL EVANGELISM</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['memberReport'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">MEMBER QUESTIONNAIRE</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['monitorReport'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">MONITOR'S REPORT</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['areaHeadReport'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">SUPERINTENDENT'S VISITATION REPORT</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtPastorReport'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">DISTRICT PASTOR'S VISITATION REPORT</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['communityReport'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">COMMUNITY IMPRESSION REPORT</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['areaSupQuestions'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">AREA SUPERINTENDENTS' DIRECT QUESTIONNAIRE</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtPastorQuestion'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">DISTRICT PASTORS' DIRECT QUESTIONNAIRE</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><h3>{{ $data['districtLevelMonoter'] }} Records</h3></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="small text-white">DISTRICT OFFICERS LEVEL QUESTIONNAIRE</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
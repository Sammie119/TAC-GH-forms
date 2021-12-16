@extends('layouts.app')

@section('title', 'TAC-forms | Report View')

@section('content')
<div class="container col-8 px-4 mt-4">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h4>
                DATA AGGREGATION REPORT ({{ $date }})
                {{-- @if (Auth()->user()->user_role != 0)
                    <a href="community/{{ $destination }}/{{ $area['area'] }}/{{ $area['district'] }}/{{ $area['local'] }}" class="btn btn-success float-end" style="margin-left: 10px;">Export to Excel</a>
                @endif --}}
                {{-- <a href="#" class="btn btn-info float-end">Statistics</a> --}}
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Report</th>
                    <th scope="col">Data Count</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Area Heads Visitation Report</td>
                        <td>{{ $data['area_head_r'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Area Sup Questionnaire</td>
                        <td>{{ $data['area_sup_q'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Community Impression Report</td>
                        <td>{{ $data['community'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>District Level Monitoring</td>
                        <td>{{ $data['district_level'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Dist Pastors Questionnaire</td>
                        <td>{{ $data['district_pas_q'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>District Pastor Visitation Rep</td>
                        <td>{{ $data['district_pas_r'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Financial Policy</td>
                        <td>{{ $data['fin_policy'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Local Evangelism</td>
                        <td>{{ $data['local_eveng'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Local Level Monitoring</td>
                        <td>{{ $data['local_level'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Members Report</td>
                        <td>{{ $data['member'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Monitors Opinion</td>
                        <td>{{ $data['moniter'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Pastor's Assessment Questionnaire</td>
                        <td>{{ $data['pastorass'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Area Sup's Assessment Questionnaire</td>
                        <td>{{ $data['sup_ass'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Procurement Policy</td>
                        <td>{{ $data['pro_policy'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Records Keeping - Area</td>
                        <td>{{ $data['report_area'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>Records Keeping - District</td>
                        <td>{{ $data['report_district'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Records Keeping - Local</td>
                        <td>{{ $data['report_local'] }}</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>Presiding Elder's Assessment</td>
                        <td>{{ $data['pres_ass'] }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col" colspan="2">Total</th>
                        <th>{{ $data['total'] }}</th>
                    </tr>
                </tfoot>
              </table>
        </div>
    </div>
</div>
    
@endsection
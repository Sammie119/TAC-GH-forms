@extends('layouts.app')

@section('title', 'TAC-forms | Report')

<style>
    .report {
        outline: 0 !important;
        border-width: 0 0 2px !important;
        border-color: #000 !important
    }

    .mb {
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: bold;
    }

</style>

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-dark bg-light mb-3 col-6" style="margin-top: 100px;">
            <div class="card-header"><h2>Report</h2></div>
            <div class="card-body">
                <form action="{{ route('report-post') }}" method="POST" id="formid">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-sm-12"> 
                            <label for="exampleDataList" class="form-label">Please Select your option</label>
                            <input class="form-control report" required name="report" list="datalistOptions" id="report" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="Area Heads Visitation Report">
                                <option value="Area Sup Questionnaire">
                                <option value="Community Impression Report">
                                <option value="District Level Monitoring">
                                <option value="Dist Pastors Questionnaire">
                                <option value="District Pastor Visitation Rep">
                                <option value="Financial Policy">
                                <option value="Local Evangelism">
                                <option value="Local Level Monitoring">
                                <option value="Members Report">
                                <option value="Monitors Opinion">
                                <option value="Procurement Policy">
                                <option value="Records Keeping - Area">
                                <option value="Records Keeping - District">
                                <option value="Records Keeping - Local">
                            </datalist>
                        </div> 
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12"> 
                            <label for="exampleDataList" class="form-label">Please Select your Destination</label>
                            <input class="form-control report" required name="destination" list="fordestination" id="destination" placeholder="Type to search...">
                            <datalist id="fordestination">
                                <option value="General">
                                <option value="Area">
                                <option value="District">
                                <option value="Local">
                            </datalist>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-4" id="area_id" style="display: none"> 
                            <input class="form-control report" name="area" id="area" placeholder="Enter Area Name...">
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-4" id="district_id" style="display: none"> 
                            <input class="form-control report" name="district" id="district" placeholder="Enter District Name...">
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-4" id="local_id" style="display: none"> 
                            <input class="form-control report" name="local" id="local" placeholder="Enter Local Name...">
                        </div> 
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
    </div>

    <script type="text/javascript">
        window.onload = function(){
            document.getElementById('report').focus();

            $('#report').on('change', function(){
                if(document.getElementById('report').value == 'Area Sup Questionnaire' || document.getElementById('report').value == 'Dist Pastors Questionnaire'){
                    document.getElementById('destination').value = 'General'
                    document.getElementById('destination').readOnly = true;
                }
                else{
                    document.getElementById('destination').value = ''
                    document.getElementById('destination').readOnly = false;
                }
            });

            $('#destination').on('input',function(){  
                if(document.getElementById('destination').value == 'Area' || document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local' ){
                    document.getElementById('area_id').style.display='block'
                }else{
                    document.getElementById('area_id').style.display='none'
                }
                
            });

            $('#destination').on('input',function(){  
                if(document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local' ){
                    document.getElementById('district_id').style.display='block'
                }else{
                    document.getElementById('district_id').style.display='none'
                }
                
            });

            $('#destination').on('input',function(){  
                if(document.getElementById('destination').value == 'Local' ){
                    document.getElementById('local_id').style.display='block'
                }else{
                    document.getElementById('local_id').style.display='none'
                }
                
            });

            $('#formid').on('submit', function() {
                if((document.getElementById('destination').value == 'Area' || document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local') && document.getElementById('area').value == '' ){
                    alert('Please Enter Area Name!!!');
                    document.getElementById('area').focus();
                    return false;
                }

                if((document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local') && document.getElementById('district').value == '' ){
                    alert('Please Enter District Name!!!');
                    document.getElementById('district').focus();
                    return false;
                }

                if(document.getElementById('destination').value == 'Local' && document.getElementById('local').value == '' ){
                    alert('Please Enter Local Name!!!');
                    document.getElementById('local').focus();
                    return false;
                }
            });
        };
    </script>
    
@endsection
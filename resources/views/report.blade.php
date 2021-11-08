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
                                <option value="Local Evangelism">
                                <option value="Local Level Monitoring">
                                <option value="Members Report">
                                <option value="Monitors Opinion">
                                
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

                    <div class="row mb-4">
                        <div class="col-sm-12" id="show1" style="display: none"> 
                            <input class="form-control report" name="destination_name" id="destination_name" placeholder="Enter Destination Name...">
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

            $('#destination').on('input',function(){  
                if(document.getElementById('destination').value == 'General'){
                    document.getElementById('show1').style.display='none'
                }else{
                    document.getElementById('show1').style.display='block'
                }
                
            });

            $('#destination').on('input',function(){  
                if(document.getElementById('destination').value == 'Area' || document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local' ){
                    document.getElementById('show1').style.display='block'
                }else{
                    document.getElementById('show1').style.display='none'
                }
                
            });

            $('#formid').on('submit', function() {
                if((document.getElementById('destination').value == 'Area' || document.getElementById('destination').value == 'District' || document.getElementById('destination').value == 'Local') && document.getElementById('destination_name').value == '' ){
                    alert('Please Enter Destination Name is Empty!!!');
                    document.getElementById('destination_name').focus();
                    return false;
                }
            });
        };
    </script>
    
@endsection
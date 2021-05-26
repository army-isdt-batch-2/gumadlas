@php $active = 'payslip' @endphp
@extends('layouts.main')
@section('title', 'Create Payslip')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Create Payslip 
                        </h4>
                    </div>
                    <div class="col-12">
                            <form class="row g-3">
                            <form action="payslip/save" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Cut ofStartf </label>
                                    <input type="date" class="form-control" id="Cut_off_Startf" required>
                                </div>



                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Cut off End</label>
                                    <input type="date" class="form-control" id="Cut off End" required>
                                </div>
                                


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Process</button>                                                                                                                                                                                                                                                     
                                </div>





                            </form>
                            <hr>    
                        </div>
                        <div class="col-12">
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
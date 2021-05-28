@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title', 'Apply loan')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Create Loan 
                        </h4>
                    </div>
                    <div class="col-12">
                            <form class="row g-3">
                            <form action="loans/save" method="post">
                                @csrf
                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Employee ID</label>
                                    <input type="text" class="form-control" name="employee_id" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" required>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Loan Type</label>
                                    <input type="text" class="form-control" name="loan_type" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Loan Amount</label>
                                    <input type="number" class="form-control" name="loan_amount" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Months Payable</label>
                                    <input type="number" class="form-control" name="months_payable" required>
                                </div>
    

                                </div>

                                <div class="col-md-8">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Notes</label>
                                    <textarea rows="7" class="form-control"></textarea>
                                </div>
                                        

                                </div>

                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
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
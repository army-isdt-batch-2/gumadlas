@php $active = 'deductions' @endphp
@extends('layouts.main')
@section('title', 'Create Deductions')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Create Deductions
                        </h4>
                    </div>
                    <div class="col-12">
                        <form action="deductions/save" method="post">
                            @csrf
                            <form class="row g-3">
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Contribution type</label>
                                <select id="inputState" class="form-select" required>
                                   <option>Choose</option>
                                   <option>Tax</option>
                                   <option>SSS</option>
                                   <option>Philheath</option>
                                   <option>PAGIBIG</option>
                                </select>
                             </div>


                            <form class="row g-3">
                            <div class="col-md-8">
                                <label for="inputEmail4" class="form-label">Base Range</label>
                                <input type="text" class="form-control" name="Base Range" required>
                            </div>

                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                                <input type="number" class="form-control" name="Monthly Contribution" required>
                            </div>

                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Employee Share</label>
                                <input type="number" class="form-control" name="Employee Share" required>
                            </div>

                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Employee Share</label>
                                <input type="number" class="form-control" name="Employee Share" required>
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
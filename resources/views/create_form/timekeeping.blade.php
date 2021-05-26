@php $active = 'timekeeping' @endphp
@extends('layouts.main')
@section('title', 'Create Timekeeping')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Create Time Keeping 
                        </h4>
                    </div>
                    <div class="col-12">
                            <form class="row g-3">
                                <form action="timekeeping/save" method="post">
                                    @csrf
                                <div class="col-md-8">
                                <label for="inputEmail4" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" id="Attendance Date" required>
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
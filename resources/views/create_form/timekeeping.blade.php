@php $active = 'timekeeping' @endphp
@extends('layout.main')
@section('title', 'Create Department')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Add Attendance Record
                        </h4>
                    </div>
                   
                    <div class="col-12">
                        <hr>    
                    </div>                   
                    <div class="col-12">
                            <form class="row g-3">
                                <div class="col-2">
                                    <a href="/" class="btn btn-danger">Cancel</a>
                                </div>
                                <div class="col-12 mt-5">
                                    <form action="/timekeeping/create" method="post">
                                        @csrf
                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" name="attendance">
                                </div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
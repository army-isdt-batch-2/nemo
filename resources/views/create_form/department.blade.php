@php $active = 'department' @endphp
@extends('layout.main')
@section('title', 'Create Department')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                          Create Department
                        </h4>
                    </div>
                    <div class="col-12">
                        <form class="row g-3">
                    <div class="col-md-5">
                        <form class =" row g-3 " action="{{ URL::route('department.create.save') }}" method="post">
                            @csrf
                          <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Department</label>
                                <input type="text" class="form-control" name="department_name" required>
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
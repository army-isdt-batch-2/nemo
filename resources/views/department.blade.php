@php $active = 'department' @endphp
@extends('layout.main')
@section('title', 'department')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Department info
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/department/create" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12 mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Department</th>
                                  
                                    <th scope="col"></th> 
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                <tr> 
                                    <th scope="row">{{$x->department_name}}</th> 
                                    <th scope="row">
                                    <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                    <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
                                    </th> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div> 
    </div> 

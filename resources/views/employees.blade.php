@php $active = 'employees' @endphp
@extends('layout.main')
@section('title', 'Layout test')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Employees Loan
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/employees/create" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">#</th>
                                    <th class="text-muted" scope="col">Employee Id</th>
                                    <th class="text-muted" scope="col">Gender</th>
                                    <th class="text-muted" scope="col">Department</th>
                                    <th class="text-muted" scope="col">Contact</th>
                                    <th class="text-muted" scope="col">Total Earnings</th>
                                    <th class="text-muted" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
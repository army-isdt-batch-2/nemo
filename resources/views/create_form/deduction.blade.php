@php $active = 'deduction' @endphp
@extends('layout.main')
@section('title', 'Deduction')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Add contribution table
                        </h4>
                    </div>
                   
                    <div class="col-12">
                        <hr>    
                    </div>                   
                    <div class="col-12">
                            <form class="row g-3">
                                <div class="col-md-6">
                                <label for="inputState" class="form-label">Contribution type</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>SSS</option>
                                    <option>PhilHealth</option>
                                    <option>Pag ibig</option>
                                    <option>Tax</option>
                                </select>
                                </div>
                                <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Basic Range</label>
                                <input type="number" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress" class="form-label">Monthly Contribution</label>
                                <input type="number" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress2" class="form-label">Employee Share</label>
                                <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress2" class="form-label">Employer Share</label>
                                <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                               
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
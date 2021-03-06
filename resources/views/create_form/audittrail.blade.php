@php $active = 'audittrail' @endphp
@extends('layout.main')
@section('title', 'audit')
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
                   
                    <<div class="col-2">
                                <form class =" row g-3 " action="{{ URL::route('audittrail.create.save') }}" method="post">
                                    @csrf
                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                                </div>
                                <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                                </div>
                                <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" name="city">
                                </div>
                                <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select class="form-control" name="state" required>
                                    <option selected>Choose...</option>
                                    <option>a</option>
                                    <option>a</option>
                                    <option>a</option>
                                </select>
                                </div>
                                <div class="col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip">
                                </div>
                                <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    Check me out
                                    </label>
                                </div>
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
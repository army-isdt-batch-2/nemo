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
                Add Employee
               </h4>
            </div>
            <div class="col-12">
               <hr>
            </div>
            <div class="col-12">
               <form class="row g-3">
                  <div class="col-md-12">
                     <label for="inputEmail4" class="form-label">Photo</label>
                     <input type="file" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">First Name</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Last Name</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Middle Name</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Contact</label>
                     <input type="number" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Birthday</label>
                     <input type="date" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Gender</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
                  <div class="col-12">
                     <label for="inputAddress" class="form-label">Address</label>
                     <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Department</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Department 1</option>
                        <option>Department 2</option>
                        <option>Department 3</option>
                     </select>
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Designation</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Basic Rate</label>
                     <input type="number" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-6">
                     <label for="inputPassword4" class="form-label">PhilHealth Contribution Table</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Department 1</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label for="inputPassword4" class="form-label">SSS Contribution Table</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Department 1</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label for="inputPassword4" class="form-label">PAGIBIG Contribution Table</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Department 1</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <label for="inputPassword4" class="form-label">Income Tax Table</label>
                     <select id="inputState" class="form-select">
                        <option selected>choose....</option>
                        <option>Department 1</option>
                     </select>
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
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
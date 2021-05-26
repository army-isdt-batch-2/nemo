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
            <div class="col-2">
               <a href="/" class="btn btn-danger">Cancel</a>
           </div>
           <div class="col-12 mt-5">
               <form action="/employees/save" method="post">
                   @csrf
              
               <form class="row g-3">
                  <div class="col-md-12">
                     <label for="inputEmail4" class="form-label">Photo</label>
                     <input type="file" class="form-control" name="photo">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">First Name</label>
                     <input type="text" class="form-control" name="first_name">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Last Name</label>
                     <input type="text" class="form-control" name="last_name">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Middle Name</label>
                     <input type="text" class="form-control" name="middle_name">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Contact</label>
                     <input type="number" class="form-control" name="contact">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Birthday</label>
                     <input type="date" class="form-control" name="birthday">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Gender</label>
                     <select class="form-control" name="gender" required>
                        <option selected>choose....</option>
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
                  <div class="col-12">
                     <label for="inputAddress" class="form-label">Address</label>
                     <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Department</label>
                     <select class="form-control" name="department" required>
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
name@php $active = 'leaves' @endphp
@extends('layout.main')
@section('title', 'leaves')
@section('content')
<div class="row align-items-center">
   <div class="col-12 mt-5">
      <div class="card">
         <div class="card-body row p-5">
            <div class="col-10">
               <h4>
                  Apply Leaves
               </h4>
            </div>
            <<div class="col-2">
               <a href="/" class="btn btn-danger">Cancel</a>
           </div>
           <div class="col-12 mt-5">
               <form action="/leaves/save" method="post">
                   @csrf
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Employee id</label>
                     <input type="text" class="form-control" name="employee_id">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Full Name</label>
                     <input type="text" class="form-control" name="Full_name">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Designation</label>
                     <input type="text" class="form-control" name="designation">
                  </div>
                  <div class="col-md-4">
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Leave Type</label>
                        <input type="text" class="form-control" name="leave_type">
                    </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Start</label>
                        <input type="date" class="form-control" name="start_date">
                     </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">End</label>
                        <input type="date" class="form-control" name="end_date">
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Address</label>
                        <textarea rows="7" class="form-control" name="address" placeholder="1234 Main St"></textarea>
                        
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
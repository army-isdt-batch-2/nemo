@php $active = 'loans' @endphp
@extends('layout.main')
@section('title', 'loans')
@section('content')
<div class="row align-items-center">
   <div class="col-12 mt-5">
      <div class="card">
         <div class="card-body row p-5">
            <div class="col-10">
               <h4>
                  Apply Loans
               </h4>
            </div>
            <div class="col-12">
               <hr>
            </div>
            <div class="col-12">
               <form class="row g-3">
                  <div class="col-md-12">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Employee id</label>
                     <input type="text" class="form-control" name="employee_id">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Full Name</label>
                     <input type="text" class="form-control" name="full_name">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Designation</label>
                     <input type="text" class="form-control" name="designation">
                  </div>
                
                  <div class="col-md-4">
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Loan Type</label>
                        <input type="text" class="form-control" name="loan_type">
                    </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" name="loan_amount">
                     </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Mounts Payable</label>
                        <input type="number" class="form-control" name="mounts_payable">
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Address</label>
                        <textarea rows="7" class="form-control" name="address" placeholder="1234 Main St">
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
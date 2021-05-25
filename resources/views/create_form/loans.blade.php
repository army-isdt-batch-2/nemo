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
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Full Name</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                     <label for="inputPassword4" class="form-label">Designation</label>
                     <input type="text" class="form-control" id="inputPassword4">
                  </div>
                
                  <div class="col-md-4">
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Loan Type</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Loan Amount</label>
                        <input type="number" class="form-control" id="inputEmail4">
                     </div>
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Mounts Payable</label>
                        <input type="number" class="form-control" id="inputEmail4">
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Address</label>
                        <textarea rows="7" class="form-control"></textarea>
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
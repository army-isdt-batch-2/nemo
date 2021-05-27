name@php $active = 'payslip' @endphp
@extends('layout.main')
@section('title', 'payslip')
@section('content')
<div class="row align-items-center">
   <div class="col-12 mt-5">
      <div class="card">
         <div class="card-body row p-5">
            <div class="col-10">
               <h4>
                  Process Payroll
               </h4>
            </div>
            <div class="col-12">
               <hr>
            </div>
            <div class="col-12">
               <div class="col-2">
                  <a href="/" class="btn btn-danger">Cancel</a>
              </div>
              <div class="col-12 mt-5">
                  <form action="/payslip/create" method="post">
                      @csrf
               <form class="row g-3">
                  <div class="col-md-6">
                     <label for="inputEmail4" class="form-label">Cut Off Start</label>
                     <input type="date" class="form-control" name="cutoff_end">
                  </div>
                  <div class="col-md-6">
                     <label for="inputEmail4" class="form-label">Cut Off End</label>
                     <input type="date" class="form-control" name="cutoff_end">
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
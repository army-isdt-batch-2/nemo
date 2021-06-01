@php $active = 'department' @endphp
@extends('layout.main')
@section('title', 'Create Department')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Department</h4>
                    </div>
                    <div class="col-12">
                         {{-- Department Form--}}
                         <form class =" row g-3 " action="{{ URL::route('department.create.save') }}" method="post">
                            @csrf

                            {{-- Department Input Field --}}
                            <div class="col-md-12">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" id="department" class="form-control" name="department_name" value="{{ old('department_name') }}" required>
                            </div>  {{-- End Department Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Department Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection
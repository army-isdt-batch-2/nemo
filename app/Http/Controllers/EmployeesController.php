<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

//facade
use Redirect;

class EmployeesController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('employees')->with([
            'data' => Employees::all()
        ]);
    }
    public function save()
    {
        Employees::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('employees');



    }
}

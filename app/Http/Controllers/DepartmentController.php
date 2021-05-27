<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

//facade
use Redirect;

class DepartmentController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('department')->with([
            'data' => Department::all()
        ]);
    }
    public function save()
    {
        Department::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('department');



    }
}

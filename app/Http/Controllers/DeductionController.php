<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deduction;

//facade
use Redirect;

class DeductionController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('deduction')->with([
            'data' => Deduction::all()
        ]);
    }
    public function save()
    {
        Deduction::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('deduction');



    }
}

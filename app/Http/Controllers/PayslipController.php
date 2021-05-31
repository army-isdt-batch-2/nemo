<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payslip;

//facade
use Redirect;

class PayslipController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('payslip')->with([
            'data' => Payslip::all()
        ]);
    }
    public function save()
    {
        Payslip::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('payslip');



    }
}

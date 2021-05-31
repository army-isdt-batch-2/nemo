<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timekeeping;

//facade
use Redirect;

class TimekeepingController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('timekeeping')->with([
            'data' => Timekeeping::all()
        ]);
    }
    public function save()
    {
        Timekeeping::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('timekeeping');



    }
}

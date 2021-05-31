<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaves;

//facade
use Redirect;

class LeavesController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('leaves')->with([
            'data' => Leaves::all()
        ]);
    }
    public function save()
    {
        Leaves::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('leaves');



    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audittrail;

//facade
use Redirect;

class AudittrailController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('audittrail')->with([
            'data' => Audittrail::all()
        ]);
    }
    public function save()
    {
        Audittrail::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('audittrail');



    }
}

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


    /**
     * Department Data Lists
     */
    public function index()
    {
        return view ('department.index')->with([
            'data' => Department::all()
        ]);
    }


    /** 
     * Create New Deartment Form
    */
    public function create()
    {
        return view ('department.create');
    }


    /** 
     * Save New Department to Database
    */
    public function store()
    {
        Department::create($this->request->except('_token'));

        # Redirect to department list with success message
        return Redirect::route('department')->with([
            'success' => "New Record is Successfully Created"
        ]);
    }


    /** 
     * Edit Departmetn Record Form
    */
    public function edit($id){

        return view ('department.edit')->with([
            'data' => Department::where('id', '=', $id)->first()
        ]);
    }


    /** 
     * Update Departmetn Record to Database
    */
    public function update($id){
        # Find reacord with the parameter $id and update the record
        Department::where('id', '=', $id)->update($this->request->except('_token'));

        # Redirect to department list with success message
        return Redirect::route('department')->with([
            'success' => "Record is cuccessfully updated"
        ]);
    }


     /** 
     * Delete Departmetn Record to Database
    */
    public function delete($id){
        # Destory Record
        Department::destroy($id);

        # Redirect to department list with success message
        return Redirect::route('department')->with([
            'success' => "Record is cuccessfully deleted"
        ]);
    }
}

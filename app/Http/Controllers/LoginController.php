<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
      return view ('login');
    }
    public function table ()
    {
      return view ('table');
    }
    public function layout ()
    {
      return view ('layout');
    }
    public function dashboard ()
    {
      return view ('dashboard');
    } 
    public function audittrail ()
    {
      return view ('audittrail');
    } 
    public function employees ()
    {
      return view ('employees');
    }
    public function department ()
    {
      return view ('department');
    }
    public function loans ()
    {
      return view ('loans');
    }
    public function leaves ()
    {
      return view ('leaves');
    }
    public function deduction ()
    {
      return view ('deduction');
    }
    public function timekeeping ()
    {
      return view ('timekeeping');
    }
    public function payslip ()
    {
      return view ('payslip');
    }
    public function form ()
    {
      return view ('form');
    }
    public function dashboard_create ()
    {
      return view ('create_form.dashboard');
    } 
    public function audittrail_create ()
    {
      return view ('create_form.audittrail');
    } 
    public function department_create ()
    {
      return view ('create_form.department');
    }
    public function employees_create ()
    {
      return view ('create_form.employees');
    }
    public function loans_create ()
    {
      return view ('create_form.loans');
    }
    public function leaves_create ()
    {
      return view ('create_form.leaves');
    }
    public function deduction_create ()
    {
      return view ('create_form.deduction');
    }
    public function timekeeping_create ()
    {
      return view ('create_form.timekeeping');
    }
    public function payslip_create ()
    {
      return view ('create_form.payslip');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory, SoftDeletes;

    //table name
    protected $table = "employees";
    //fields
     protected $fillable = [

       'title',
       'employee_id',
       'photo',
       'first_name',
       'last_name',
       'middle_name',
       'contact',
       'birthday',
       'gender',
       'department_id',
       'designation',
       'basic_range',
       'sss',
       'philhealth',
       'pagibig',
       'tax',
  
       
     ];

}


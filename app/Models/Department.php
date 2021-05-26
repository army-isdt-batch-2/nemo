<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;
    
    //table name
    protected $table = "department";
    //fields
     protected $fillable = [

       'department_name',
      
       
     ];

}

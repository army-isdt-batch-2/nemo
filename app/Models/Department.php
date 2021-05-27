<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    use HasFactory;
    
    //table name
    protected $table = "department";
    //fields
     protected $fillable = [

       'department_name',
      
       
     ];

}

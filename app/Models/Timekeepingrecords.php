<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeepingrecords extends Model
{
    use HasFactory, SoftDeletes;
     //table name
     protected $table = "Timekeepingrecords";
     //fields
      protected $fillable = [


        'timekeeping_id',
        'employee_id',
        'clock_in',
        'clock_out',
        'total',
        'employees_id'
  

      ];
}

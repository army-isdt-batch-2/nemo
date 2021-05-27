<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paysliprecords extends Model
{
    use HasFactory, SoftDeletes;
     //table name
     protected $table = "paysliprecords";
     //fields
      protected $fillable = [


        'employees_id',
        'payslip_id',
        'data',
  

      ];
}

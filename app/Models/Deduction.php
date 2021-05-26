<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deduction extends Model
{
    use HasFactory, SoftDeletes;

     //table name
     protected $table = "deduction";
     //fields
      protected $fillable = [

    'basic_range',
    'employer_share',
    'employee_share',
    'monthly_contribution'

     ];

}

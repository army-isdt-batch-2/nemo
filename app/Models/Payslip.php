<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payslip extends Model
{
    use HasFactory, SoftDeletes;
     //table name
     protected $table = "payslip";
     //fields
      protected $fillable = [


    'cutoff_start',
    'cutoff_end'

      ];
}

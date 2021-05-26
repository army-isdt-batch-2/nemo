<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loans extends Model
{
    use HasFactory, SoftDeletes;

    //table name
    protected $table = "loans";
    //fields
     protected $fillable = [


    'employees_id',
    'full_name',
    'loan_type',
    'loan_amount',
    'months_payable',
    'notes'

    ];

    
}



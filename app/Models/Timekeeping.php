<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timekeeping extends Model
{
    use HasFactory, SoftDeletes;
     //table name
     protected $table = "Timekeeping";
     //fields
      protected $fillable = [


        'date',
        'employees_id'
  

      ];
}

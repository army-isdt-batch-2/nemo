<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leaves extends Model
{
    use HasFactory, SoftDeletes;

    //table name
    protected $table = "leaves";
    //fields
     protected $fillable = [
       

        'employees_id',
        'designation',
        'leave_type',
        'start_date',
        'end_date',
        'notes'



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifiedData extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'fullname',
        'initial',
        'address',
        'city',
        'date',
        'regNo',
        'image',
        'faculty_id',
        'batch_id',
        'department_id',
    ];
}

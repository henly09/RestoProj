<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblcashier extends Model
{
    use HasFactory;
    protected $fillable = [
        'First_Name',
        'Last_Name',
        'username',
        'password',
        'status',
        'Address',
        'Phone_no',
        'Email',
        'gender',
    ];
}

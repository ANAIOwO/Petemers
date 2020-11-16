<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['hospital', 'day', 'time', 'classification','petsclass','otherpets','petsgender','names','phonenumber','remark'];
}

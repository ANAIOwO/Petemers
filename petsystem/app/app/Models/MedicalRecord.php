<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MedicalRecord extends Model
{
    protected $fillable = ['phonenumber','petpicture','hospital','medicalrecordnumber','petname','petgender','petsclass','chipnumber','petbirthday','breed','rabiesid','bloodtype','fix','specialmedicalhistory'];
}

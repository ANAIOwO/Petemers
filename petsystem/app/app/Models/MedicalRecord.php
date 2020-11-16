<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MedicalRecord extends Model
{
    protected $fillable = ['names', 'phonenumber', 'birthday', 'address','email','remark','petpicture','medicalrecordnumber','petname','petgender','petsclass','otherpets','chipnumber','petbirthday','breed','otherbreed','rabiesid','bloodtype','specialmedicalhistory'];
}

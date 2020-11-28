<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userpets extends Model
{
    protected $fillable = ['userid','phonenumber','petpicture', 'petname', 'petgender','petsclass','chipnumber','petbirthday','breed','rabiesid','bloodtype','fix','specialmedicalhistory'];
}

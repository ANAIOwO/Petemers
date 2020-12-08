<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Treatment;
use App\Models\Appointment;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|superadministrator');
    }

    public function index()
    {
        return view('user.index');
    }
    public function service()
    {
        return view('user/service');
    }

    public function userchecktreatment()
    {
        $treatment = DB::table('treatments')->where('phonenumber', 'LIKE', Auth::user()->phonenumber )->orderby('created_at','DESC')->get();
        return view('user/checktreatment', compact('treatment'));
    }

    public function usercheckappointment(){
        //$user = Auth::user()->name;
        $appointment = DB::table('appointments')->where('phonenumber', 'LIKE', Auth::user()->phonenumber )->orderby('created_at','DESC')->get();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();
        return view('user/checkappointment', compact('appointment'));
    }

    public function store(Request $request)
    {
        $messages = [
            "hospital.required" => "需點選醫院!",
            "day.required" => "需選擇日期!",
            "time.required" => "需選擇時間!",
            "chipnumber.required" => "需輸入晶片號碼",
            "names.required" => "需填入飼主/預約人!",
            "phonenumber.required" => "需填入聯絡電話!",
            "phonenumber.numeric" => "連絡電話需填入數字!",
            "phonenumber.digits_between" => "連絡電話需符合8~10個數字!"
        ];
        $request->validate([
            'hospital' => 'required|max:255',
            'day' => 'required|max:255',
            'time' => 'required|max:255',
            'classification' => 'required|max:255',
            'petsclass' => 'required|max:255',
            'petsgender' => 'required|max:255',
            'chipnumber' => 'required|max:255',
            //'names' => 'required|max:255',
            //'phonenumber' => 'required|numeric|digits_between:8,10',
            'names' => array(Auth::user()->name),
            'phonenumber' => array(Auth::user()->phonenumber),
            'remark' => 'max:255',
        ], $messages);

        $storeData = array(
            'hospital' => $request->hospital,
            'day' => $request->day,
            'time' => $request->time,
            'classification' => $request->classification,
            'petsclass' => $request->petsclass,
            'petsgender' => $request->petsgender,
            //'names' => 'required|max:255',
            //'phonenumber' => 'required|numeric|digits_between:8,10',
            'chipnumber' => $request->chipnumber,
            'names' => Auth::user()->name,
            'phonenumber' => Auth::user()->phonenumber,
            'remark' => $request->remark,
        );
    
        $appointment = Appointment::create($storeData);

        return redirect('/checkappointment')->with('Success', '成功預約!');
    }
}

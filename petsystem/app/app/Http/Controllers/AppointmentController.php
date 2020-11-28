<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $appointment = Appointment::all();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();
        return view('user/checkappointment', compact('appointment'));
    }

    public function checkadmin()
    {
        //$user = Auth::user()->name;
        $appointment = Appointment::all();
        $medicalrecord = MedicalRecord::all();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();
        View::share ( 'ckeck', 'false' );
        return view('petsystemadmin/admincheckappointment', compact('appointment','medicalrecord'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('petsystemadmin/editappointment', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            "chipnumber.required" => "需輸入晶片號碼",
            "day.required" => "需選擇日期!",
            "time.required" => "需選擇時間!",
        ];
        $updateData = $request->validate([
            'chipnumber' => 'required|max:255',
            'day' => 'required|max:255',
            'time' => 'required|max:255',
            'classification' => 'required|max:255',
            'petsclass' => 'required|max:255',
            'petsgender' => 'required|max:255',
            'remark' => 'max:255',
        ], $messages);
        Appointment::whereId($id)->update($updateData);
        return redirect('/admincheckappointment')->with('completed', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect('/admincheckappointment')->with('completed', 'Student has been deleted');
    }
}

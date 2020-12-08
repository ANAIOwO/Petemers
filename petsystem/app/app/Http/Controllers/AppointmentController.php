<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;

class AppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator');
        //開啟授權，注意要開啟
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function checkadmin()
    {
        $admin = Auth::user()->name;
        $appointment = DB::table('appointments')->where('hospital', 'LIKE', $admin )->orderBy('day','DESC')->get();
        $medicalrecord = MedicalRecord::all();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();
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
        //
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
            "classification.required" => "需選擇就診類別!",
            "petsclass.required" => "需選擇寵物類別!",
            "petsgender.required" => "需選擇寵物性別!",
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

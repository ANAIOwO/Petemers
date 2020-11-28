<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\MedicalRecord;


class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatment = Treatment::all();
        return view('petsystemadmin/EMRS_emr_create', compact('treatment'));
    }

    public function usercheck()
    {
        $treatment = DB::table('treatments')->where('phonenumber', 'LIKE', Auth::user()->phonenumber )->get();
        return view('user/checktreatment', compact('treatment'));
    }

    public function usercheckid($id)
    {
        $treatment = Treatment::findOrFail($id);
        return view('user/checktreatmentid', compact('treatment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'phonenumber' => 'required',
            'medicalrecordnumber' => 'required',
            'hospital' => 'required|max:255',
            'doctorname' => 'required|max:255',
            'day' => 'required|max:255',
            'assess' => 'required|max:255',
            'treatment' => 'required|max:255',
            'medicine' => 'required|max:255',
            'remark' => 'max:255',
        ]);


        $storeData = array(
            'phonenumber' => $request->phonenumber,
            'medicalrecordnumber' => $request->medicalrecordnumber,
            'hospital' => Auth::user()->name,
            'doctorname' => $request->doctorname,
            'day' => $request->day,
            'assess' => $request->assess,
            'treatment' => $request->treatment,
            'medicine' => $request->medicine,
            'remark' => $request->remark,
        );

        $treatments = Treatment::create($storeData);
        
        $users = DB::table('users')->where('phonenumber', 'LIKE', $request->phonenumber)->get();

        $petmedicalrecord = DB::table('medical_records')->where('medicalrecordnumber', 'LIKE', $request->medicalrecordnumber)->get();

        $pettreatment = DB::table('treatments')->where('medicalrecordnumber', 'LIKE', $request->medicalrecordnumber)->get();

        //href="{{ url('treatmentdata',['userphonenumber'=>$appointments->phonenumber,'mrnumber'=>$medicalrecords->medicalrecordnumber])}}"
        return redirect(url('treatmentdata',['userphonenumber'=>$request->phonenumber,'mrnumber'=>$request->medicalrecordnumber]));
        //return view('petsystemadmin/EMRS_treatment', compact('users', 'petmedicalrecord', 'pettreatment'));
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
        $treatment = Treatment::findOrFail($id);
        return view('petsystemadmin/edittreatment', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,$phonenumber,$medicalrecordnumber)
    {
        $request->validate([
            'doctorname' => 'required|max:255',
            'day' => 'required|max:255',
            'assess' => 'required|max:255',
            'treatment' => 'required|max:255',
            'medicine' => 'required|max:255',
            'remark' => 'max:255',
        ]);


        $updateData = array(
            'doctorname' => $request->doctorname,
            'day' => $request->day,
            'assess' => $request->assess,
            'treatment' => $request->treatment,
            'medicine' => $request->medicine,
            'remark' => $request->remark,
        );

        Treatment::whereId($id)->update($updateData);

        return redirect(url('treatmentdata',['userphonenumber'=>$phonenumber,'mrnumber'=>$medicalrecordnumber]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$phonenumber,$medicalrecordnumber)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        return redirect(url('treatmentdata',['userphonenumber'=>$phonenumber,'mrnumber'=>$medicalrecordnumber]));
    }
}

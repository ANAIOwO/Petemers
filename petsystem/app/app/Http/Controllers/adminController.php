<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\AdminComments;
use App\Models\User;

class adminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('role:superadministrator');
        //開啟授權，注意要開啟
    }

    public function index()
    {
        return view('admin.index');
    }
    public function adminhome()
    {
        return view('petsystemadmin/EMRS_home');
    }

    public function admincheck()
    {
        $user = Auth::user()->name;
        $appointment = Appointment::all();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();

        //$medicalrecord = MedicalRecord::all();

        //return view('petsystemadmin/checkappmed', compact('appointment','medicalrecord'));
        return view('petsystemadmin/checkappointment', compact('appointment'));
    }

    public function destroyall()
    {
        $post_id = Auth::user()->id;
        DB::table('admin_comments')->where('post_id', 'LIKE', '%' . $post_id . '%')->delete();
        return redirect('/showposts');
    }

    public function search_userdata(Request $request)
    {
        $searchnumber = $request->input('searchnumber');

        $users = DB::table('users')->where('phonenumber', 'LIKE', $searchnumber)->get();

        $userpet = DB::table('userpets')
            ->where('phonenumber', 'LIKE', $searchnumber)
            ->get();

        //$medicalrecord = DB::table('medical_records')->where('phonenumber', 'LIKE', $searchnumber)->where('hospital', 'LIKE', Auth::user()->name)->get();

        $medicalrecord =  MedicalRecord::all();
        return view('petsystemadmin/EMRS_emr_create', compact('users', 'userpet', 'medicalrecord'));
    }

    public function treatmentdata($userphonenumber, $mrnumber)
    {

        $users = DB::table('users')->where('phonenumber', 'LIKE', $userphonenumber)->get();

        $petmedicalrecord = DB::table('medical_records')->where('medicalrecordnumber', 'LIKE', $mrnumber)->get();
        //$petmedicalrecord = MedicalRecord::all();

        //$pettreatment = DB::table('treatments')->where('medicalrecordnumber', 'LIKE', $mrnumber)->get();
        $checkhospital = Auth::user()->name;
        $pettreatment = DB::table('treatments')->where('medicalrecordnumber', 'LIKE', $mrnumber)->get();

        return view('petsystemadmin/EMRS_treatment', compact('users', 'petmedicalrecord', 'pettreatment'));
    }
}

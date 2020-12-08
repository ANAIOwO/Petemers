<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Faker\Provider\Image as ProviderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
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
        $medicalrecord = MedicalRecord::all();
        return view('user/checkmedicalrecord', compact('medicalrecord'));
    }

    public function checkadmin()
    {
        $admin = Auth::user()->name;
        $medicalrecord = DB::table('medical_records')->where('hospital', 'LIKE', $admin)->orderby('created_at','DESC')->get();
        //$appointment = DB::table('appointments')
        //->where('names', 'LIKE', '%' . $user . '%')
        //->get();
        return view('petsystemadmin/admincheckmedicalrecord', compact('medicalrecord'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('EMRS_home');
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
        $messages = [
            "phonenumber.required" => "會員編號為(會員電話)請確認填入!",
            "medicalrecordnumber.required" => "需填入病歷號碼!",
            "medicalrecordnumber.unique" => "病歷號碼已存在，請修改!",
            "petname.required" => "需填入寵物名字!",
            "petgender.required" => "需選擇寵物性別!",
            "petsclass.required" => "需選擇寵物種類!",
            "chipnumber.required" => "需輸入晶片號碼!",
            "chipnumber.unique" => "晶片號碼已存在，請修改!",
            "petbirthday.required" => "需輸入寵物生日!",
            "breed.required" => "需選擇寵物品種!",
            "bloodtype.required" => "需選擇寵物血型!",
            "fix.required" => "需選擇結紮狀況!",
            "phonenumber.numeric" => "會員編號為(會員電話)需填入數字!",
            "phonenumber.digits_between" => "會員編號為(會員電話)需符合8~10個數字!"
        ];

        $request->validate([
            'phonenumber' => 'required|numeric|digits_between:8,10',
            'petpicture' => 'image|max:2048',
            'medicalrecordnumber' => 'required|unique:medical_records',
            'petname' => 'required|max:255',
            'petgender' => 'required|max:255',
            'petsclass' => 'required|max:255',
            'chipnumber' => 'required|max:255|unique:medical_records',
            'petbirthday' => 'required|max:255',
            'breed' => 'required|max:255',
            'rabiesid' => 'max:255',
            'bloodtype' => 'required|max:255',
            'fix' => 'required|max:255',
            'specialmedicalhistory' => 'max:255',
        ], $messages);

        $image_file = $request->file('petpicture');
        
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $storeData = array(
            'phonenumber' => $request->phonenumber,
            'petpicture' => $image,
            'hospital' => Auth::user()->name,
            'medicalrecordnumber' => $request->medicalrecordnumber,
            'petname' => $request->petname,
            'petgender' => $request->petgender,
            'petsclass' => $request->petsclass,
            'chipnumber' => $request->chipnumber,
            'petbirthday' => $request->petbirthday,
            'breed' => $request->breed,
            'rabiesid' => $request->rabiesid,
            'bloodtype' => $request->bloodtype,
            'fix' => $request->fix,
            'specialmedicalhistory' => $request->specialmedicalhistory,
        );

        $medicalrecord = MedicalRecord::create($storeData);
        
        return redirect('/admincheckmedicalrecord')->with('completed', 'MedicalRecord has been saved!');
    }


    function fetch_image($image_id){
        $image = MedicalRecord::findOrFail($image_id);

        $image_file = Image::make($image->petpicture);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-type','image/jpg');

        return $response;
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
        $medicalrecord = MedicalRecord::findOrFail($id);
        return view('petsystemadmin/editmedicalrecord', compact('medicalrecord'));
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
            "petname.required" => "需填入寵物名字!",
            "petgender.required" => "需選擇寵物性別!",
            "petsclass.required" => "需選擇寵物種類!",
            "petbirthday.required" => "需輸入寵物生日!",
            "breed.required" => "需選擇寵物品種!",
            "bloodtype.required" => "需選擇寵物血型!",
            "fix.required" => "需選擇結紮狀況!",
        ];

        $request->validate([
            'petname' => 'required|max:255',
            'petgender' => 'required|max:255',
            'petsclass' => 'required|max:255',
            'petbirthday' => 'required|max:255',
            'breed' => 'required|max:255',
            'rabiesid' => 'max:255',
            'bloodtype' => 'required|max:255',
            'fix' => 'required|max:255',
            'specialmedicalhistory' => 'max:255',
        ], $messages);

        $storeData = array(
            'petname' => $request->petname,
            'petgender' => $request->petgender,
            'petsclass' => $request->petsclass,
            'petbirthday' => $request->petbirthday,
            'breed' => $request->breed,
            'rabiesid' => $request->rabiesid,
            'bloodtype' => $request->bloodtype,
            'fix' => $request->fix,
            'specialmedicalhistory' => $request->specialmedicalhistory,
        );

        MedicalRecord::whereId($id)->update($storeData);
        
        return redirect('/admincheckmedicalrecord')->with('completed', 'MedicalRecord has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicalrecord = MedicalRecord::findOrFail($id);
        $medicalrecord->delete();

        return redirect('/admincheckmedicalrecord')->with('completed', 'Student has been deleted');
    }
}

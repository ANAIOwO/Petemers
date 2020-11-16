<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Faker\Provider\Image as ProviderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class MedicalRecordController extends Controller
{
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

    public function usercheck()
    {
        $medicalrecord = MedicalRecord::all();
        return view('user/checkmedicalrecord', compact('medicalrecord'));
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
        $request->validate([
            'names' => 'required|max:255',
            'phonenumber' => 'required|numeric|digits_between:8,10',
            'birthday' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'remark' => 'max:255',
            'petpicture' => 'image|max:2048',
            'medicalrecordnumber' => 'required|unique:medical_records',
            'petname' => 'required|max:255',
            'petgender' => 'required|max:255',
            'petsclass' => 'max:255',
            'otherpets' => 'max:255',
            'chipnumber' => 'required|max:255',
            'petbirthday' => 'required|max:255',
            'breed' => 'required|max:255',
            'otherbreed' => 'max:255',
            'rabiesid' => 'max:255',
            'bloodtype' => 'required|max:255',
            'specialmedicalhistory' => 'max:255',
        ]);

        $image_file = $request->file('petpicture');
        
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $storeData = array(
            'names' => $request->names,
            'phonenumber' =>  $request->phonenumber,
            'birthday' =>  $request->birthday,
            'address' =>  $request->address,
            'email' =>  $request->email,
            'remark' =>  $request->remark,
            'petpicture' => $image,
            'medicalrecordnumber' => $request->medicalrecordnumber,
            'petname' => $request->petname,
            'petgender' => $request->petgender,
            'petsclass' => $request->petsclass,
            //'otherpets' => $request->otherpets,
            'chipnumber' => $request->chipnumber,
            'petbirthday' => $request->petbirthday,
            'breed' => $request->breed,
            //'otherbreed' => $request->otherbreed,
            'rabiesid' => $request->rabiesid,
            'bloodtype' => $request->bloodtype,
            'specialmedicalhistory' => $request->specialmedicalhistory,
        );

        $medicalrecord = MedicalRecord::create($storeData);
        
        return redirect('/medicalrecordshow')->with('completed', 'MedicalRecord has been saved!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

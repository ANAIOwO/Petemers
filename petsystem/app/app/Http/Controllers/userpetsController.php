<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userpets;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class userpetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userpet = userpets::all();
        $userpet = DB::table('userpets')->where('phonenumber', 'LIKE', Auth::user()->phonenumber )->get();
        return view('user/checkuserpet', compact('userpet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/userpetcreate');
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
            "petname.required" => "需要填寫寵物名字",
            "petsclass.required" => "需要選擇種類",
            "fix.required" => "需要選擇結紮狀況",
            "chipnumber.required" => "需要輸入晶片號碼"
        ];

        $request->validate([
            'petpicture' => 'image|max:2048',
            'petname' => 'required|max:255',
            'petgender' => 'max:255',
            'petsclass' => 'required|max:255',
            'chipnumber' => 'required|max:255',
            'petbirthday' => 'max:255',
            'breed' => 'max:255',
            'rabiesid' => 'max:255',
            'bloodtype' => 'max:255',
            'fix' => 'required|max:255',
            'specialmedicalhistory' => 'max:255',
        ], $messages);

        $image_file = $request->file('petpicture');
        
        $image = Image::make($image_file);

        Response::make($image->encode('jpeg'));

        $storeData = array(
            'userid' => Auth::user()->id,
            'phonenumber' => Auth::user()->phonenumber,
            'petpicture' => $image,
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
        $userpet = userpets::create($storeData);
        
        return redirect('checkuserpet');
    }

    function fetch_image($image_id){
        $image = userpets::findOrFail($image_id);

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
        //$userpet = userpets::findOrFail($id);
        //return view('user/edituserpet', compact('userpet'));
        return redirect('home');
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
        /*
        $updateData = $request->validate([
            'petname' => 'required|max:255',
            'petgender' => 'max:255',
            'petsclass' => 'required|max:255',
            'chipnumber' => 'max:255',
            'petbirthday' => 'max:255',
            'breed' => 'max:255',
            'rabiesid' => 'max:255',
            'bloodtype' => 'max:255',
            'fix' => 'max:255',
            'specialmedicalhistory' => 'max:255',
        ]);
        userpets::whereId($id)->update($updateData);
        return redirect('/checkuserpet');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userpet = userpets::findOrFail($id);
        $userpet->delete();

        return redirect('/checkuserpet')->with('completed', '成功刪除');
    }
}

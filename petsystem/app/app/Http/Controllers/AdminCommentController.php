<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminComments;
use App\Models\Post;
use App\Http\Controllers\redicect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = DB::table('admin_comments')
        ->where('post_id', 'LIKE', '%' . Auth::user()->id . '%')
        ->get();
        return view('post', compact('comment'));
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
        $this->validate($request, array(
            'name' =>'required|max:255',
            'contact'=>'required|max:255',
            'comment' => 'required|min:1|max:2000',
        ));

        $comment = new AdminComments();
        $comment->name = $request->name;
        $comment->contact = $request->contact;
        $comment->comment = $request->comment;
        $comment->post_id =  Auth::user()->id;

        $comment->save();

        return redirect('/showposts');
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
        $comment = AdminComments::findOrFail($id);
        $comment->delete();

        return redirect('/showposts');
    }
    
}

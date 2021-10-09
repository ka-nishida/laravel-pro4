<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Mail; //追加
use Auth;
use InterventionImage; //追加

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $Admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $posts)
    {
        return view('adminedit', ['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $Admin)
    {
        // dd($request->all());
        $files = $request->file('photo_detail');
            // dd($request->all());
        $file_name = $files->getClientOriginalName();
        $files->storeAS('public/detail',$file_name);
        
        //以下に登録処理を記述（Eloquentモデル）
        $posts=Mail::find($request->id);
        $posts->photo_detail = $file_name;
        $posts->save();

    return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $Admin)
    {
        //
    }
}

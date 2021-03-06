<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mail; //追加
use Auth;
use InterventionImage; //追加

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Mail::get();
        
        return view('index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Mail::get();
        return view('admin',['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file('photo_list');
        foreach((array)$files as $file){
           // dd($request->all());
       $file_name = $file->getClientOriginalName();
       $file->storeAS('public/image',$file_name);
       
       //以下に登録処理を記述（Eloquentモデル）
       $posts = new Mail;
       // $posts->file = $posts;
       $posts->client_name = $request->client_name;
       // $posts->photo_list = $file_name;
       $posts->photo_list = $file_name;
       $posts->user_id = Auth::id();
       $posts->save();
       }
       return redirect('/admin');
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
    public function update(Request $request)
    {
        // dd($request->scan);
        $id = $request->scan;
        $scans = Mail::find($id);
        $scan = $scans->scan;
        if($scan<>1){
            $scans->scan = 1;
            $scans->save();
        }elseif($scan=1){
            $scans->scan = 0;
            $scans->save();
        }
        return redirect('/');
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

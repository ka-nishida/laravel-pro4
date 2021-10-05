<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function store(Request $request){
        //dd($request->all());
        $files = $request->file('file');
            foreach($files as $file){
            	$file_name = $file->getClientOriginalName();
                $file->storeAS('public/image',$file_name);
        }
        //データベースURL登録
        $image = str_replace('public/image/', '', $image);
        $image = new Mail;
        $image->file = $image;
        $image->save();
    }
}
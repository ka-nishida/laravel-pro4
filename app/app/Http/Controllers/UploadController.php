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
                $file->storeAS('public',$file_name);
            }
    }
}
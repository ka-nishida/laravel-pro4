<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mail; //追加


class UploadController extends Controller
{
    public function index(){
    	return view('admin');
    }

    public function store(Request $request){
        //dd($request->all());
                //バリデーション 
                // $validator = Validator::make($request->all(), [
                //     'client_name' => 'required|max:255',
                // ]);
                
                // //バリデーション:エラー
                // if ($validator->fails()) {
                //     return redirect('/')
                //         ->withInput()
                //         ->withErrors($validator);
                // }
                $files = $request->file('photo_list');
                 foreach($files as $file){
                    // dd($request->all());
            	$file_name = $file->getClientOriginalName();
                $file->storeAS('public/image',$file_name);

                //以下に登録処理を記述（Eloquentモデル）
                $posts = new Mail;
                // $posts->file = $posts;
                $posts->client_name = $request->client_name;
                // $posts->photo_list = $file_name;
                $posts->photo_list = $file_name;
                $posts->save();
                }
                
                
                
                return redirect('/admin');
    }
}
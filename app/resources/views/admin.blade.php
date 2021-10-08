<!-- resources/views/posts.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            投稿フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 投稿フォーム -->
        <form action="{{ url('admin') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- 投稿のタイトル -->
            <div class="form-group">
                クライアント
                <div class="col-sm-6">
                    <input type="text" name="client_name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                外観
                <div class="col-sm-6">
                    <input type="file" id="file" name="photo_list[]" class="form-control" multiple>
                </div>
            </div>

            <!-- 投稿の本文 -->
            <!-- <div class="form-group">
                電話番号
                <div class="col-sm-6">
                    <input type="text" name="client_tel" class="form-control">
                </div>
            </div> -->
            <!-- 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- 全ての投稿リスト -->
    @if( Auth::check() )
    @endif
    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    

                    <p>ユーザー管理画面<br>
                    <a href="{{ url('/') }}">ユーザーが郵送物を確認できるサイトへ飛びます。</a></p>

                    <p>管理画面<br>
                    <a href="{{ url('admin') }}">写真画像をUPする管理画面へ飛びます。</a></p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

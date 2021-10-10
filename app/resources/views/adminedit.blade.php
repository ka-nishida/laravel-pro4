@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
        <form action="{{ url('adminedit/update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <!-- item_name -->

            <div class="form-group">
                scan済みファイル登録
                <div class="col-sm-6">
                    <input type="file" id="file" name="photo_detail" class="form-control" multiple>
                </div>
            </div>

            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link pull-right" href="{{ url('admin') }}"> Back</a>
            </div>
            <br>
            <input type="hidden" name="id" value="{{$posts->id}}" />

                        <!-- Save ボタン/Back ボタン -->

            <!-- CSRF -->
            {{ csrf_field() }}
            <!--/ CSRF -->
        </form>

            <div class="form-group">
                <label for="item_name">ID</label>
                <input type="text" name="item_name" class="form-control" value="{{ $posts->id }}">
            </div>

            <div class="form-group">
                <label for="item_name">外観</label>
                <input type="text" name="item_name" class="form-control" value="{{ $posts->photo_list }}">
            </div>
            <div class="form-group">
                <label for="item_name">書類写真</label>
                <input type="text" name="item_name" class="form-control" value="{{ $posts->photo_detail }}">
            </div>



    </div>
</div>
@endsection
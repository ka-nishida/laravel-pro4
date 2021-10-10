@extends('layouts.app')
@section('content')
    @include('common.errors')
        @if( Auth::check() )
    <!-- 全ての投稿リスト -->
    @if (count($posts) > 0)
        <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>投稿一覧</th>
                        <th>処理</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <!-- 投稿タイトル -->
                                <td class="table-text">
                                    <div><img src="storage/image/{{ $post->photo_list }}"height="200px"></div>
                                </td>
                                 <!-- 投稿詳細 -->
                                <td class="table-text">
                                    <div></div>
                                </td>
				 <!-- 投稿者名の表示 -->
                                <td class="table-text">
                                    <div></div>
                                </td>
 				<!-- お気に入りボタン -->
                                <td class="table-text">
                                <form action="{{ url('/') }}" type=”submit” method="post">
                                {{ csrf_field() }}
                                @if ($post->scan===1)
                                <p><button type=”submit” name="scan" value="{{ $post->id }}" class='btn btn-secondary'>scan申請済み</button></p>
                                <div class="alert alert-secondary" role="alert">
                                Scan処理が完了するまでお待ち下さい。<br>処理完了後、こちらにリンクが表示されます。
                                </div>
                                @else
                                <button type=”submit” name="scan" value="{{ $post->id }}" class='btn btn-danger'>scanして中身をみる</button>
                                @endif
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>		
    @endif
    @endif
@endsection
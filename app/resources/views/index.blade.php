@foreach ($posts as $post)
    <tr>
        <!-- 投稿タイトル -->
        <td class="table-text">
            <div>{{ $post->client_name }}</div>
        </td>
            <!-- 投稿詳細 -->
        <td class="table-text">
            <div>/storage/image/{{ $post->photo_list }}</div>
            <img src="/storage/image/{{ $post->photo_list }}">
        </td>
    </tr>
@endforeach

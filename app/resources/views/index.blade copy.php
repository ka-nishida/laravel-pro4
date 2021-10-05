


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" action="/upload" enctype="multipart/form-data">

		{{ csrf_field() }}
	<!-- 投稿のタイトル -->
	< class="form-group">
		投稿のタイトル
			<input type="text" name="post_title" class="form-control">
	<!-- 投稿の本文 -->
	<div class="form-group">
		投稿の本文
		<div class="col-sm-6">
			<input type="text" name="post_desc" class="form-control">
		</div>
	</div>
    <input type="file" id="file" name="file[]" class="form-control" multiple>

	<button type="submit">アップロード</button>

	</form>

	
    <a href="../storage/001.jpg">アップロードファイル</a>

</body>
</html>
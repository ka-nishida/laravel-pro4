<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" action="/upload" enctype="multipart/form-data">

		{{ csrf_field() }}

    <input type="file" id="file" name="file[]" class="form-control" multiple>

	<button type="submit">アップロード</button>

	</form>
    <a href="../storage/001.jpg">アップロードファイル</a>

</body>
</html>
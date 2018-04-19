<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>laravel 添加留言</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		标题:<input type="text"  name="title">
		<input type="file" name="pic">
		内容:<textarea name="content" id="" cols="30" rows="10"></textarea>
		<input type="submit" value="添加">
	</form>
</body>
</html>
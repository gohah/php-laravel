<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>laravel 修改留言</h1>

	<form action="" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		标题:<input type="text"  name="title" value="<?php echo $row->title;?>">
		内容:<textarea name="content" id="" cols="30" rows="10"><?php echo $row->content;?></textarea>
		<input type="submit" value="修改">
	</form>
</body>
</html>
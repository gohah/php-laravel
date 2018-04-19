<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>laravel首页</h1>

	<table>
		<tr>
			<td>标题</td>
			<td>内容</td>
			<td>操作</td>
		</tr>
		<?php foreach($data as $d) {?>
		<tr>
			<td><?php echo $d->title;?></td>
			<td><?php echo $d->content;?></td>
			<td>
				<a href="/msg/del/<?php echo $d->id;?>">删除</a>
				<a href="/msg/up/<?php echo $d->id;?>">编辑</a>
			</td>
		</tr>
		<?php  } ?>
	</table>
</body>
</html>
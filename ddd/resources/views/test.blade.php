<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script>
	@{{$javah}}
</script>
{!!$code!!}
<body>
	<h1>{{$title}}</h1>
	<p>{{$content}}</p>

	{{$score}}
	@if($score >= 60)
	及格<br>
	@else
	不及格<br>
	@endif
	
	@for($i=0;$i<=10;$i++)
		{{$i}}
	@endfor
	<br>
	@foreach($user  as $u)
		{{$u}}
	@endforeach
	<br>
	@forelse([] as $u)
	{{$u}}
	@empty
	暂无记录
	@endforelse
</body>
@include('footer')
</html>
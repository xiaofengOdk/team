<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 边框表格</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-bordered"  width="200px" height="200px">
	<h1 align="center">合作中心</h1>
	@php $name=session('adminuser');
	$name=$name->admin_name;
	 @endphp
	欢迎{{$name}}登录
	<a href="{{url('login/tui')}}">退出</a>
	<thead>
		<tr >
			@php $value=session('adminuser');
			$value=$value->admin_grade;
			@endphp
			@if($value==1)
			<th style="height: 80px;font-size: 20px;background-color:pink;"><a href="{{'visitor/index'}}">拜访会议</a></th>
			<th style="font-size: 20px;background-color:pink;"><a href="{{'customer/index'}}">顾客</a></th>
			@else
			<th style="height: 80px;font-size: 20px;background-color:pink;"><a href="{{'visitor/index'}}">拜访会议</a></th>
			<th style="font-size: 20px;background-color:pink;"><a href="{{'customer/index'}}">顾客</a></th>
			<th style="font-size: 20px;background-color:pink;"><a href="{{'saleman/index'}}">业务员</a></th>
			<th style="font-size: 20px;background-color:pink;"><a href="{{'admin/index'}}">Admin</a></th>
			@endif
		</tr>
	</thead>
</table>
</body>
</html>

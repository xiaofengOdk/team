<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 边框表格</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<a href="/"><h1 align="center" style="height: 40px;font-size: 20px;background-color:red;">跳回首页</h1></a>
<body>
	<a style="float:right" href="{{url('admin/create')}}" class="btn btn-default">添加</a>

<table class="table table-bordered">
	<caption>管理员表显示的数据</caption>
	<form>
		名称名称<input type="text" name="name" value="{{$query['name']??''}}">
		密码<input type="text" name="pwd" value="{{$query['pwd']??''}}">
		<input type="submit" value="搜索">
	</form>
	<thead>
		<tr>
			<th>id</th>
			<th>管理员名称</th>
			<th>邮箱</th>
			<th>手机号</th>
			<th>级别</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach($res as $k=>$v)
		<tr>
		<td>{{$v->admin_id}}</td>
		<td>{{$v->admin_name}}</td>
		<td>{{$v->admin_email}}</td>
		<td>{{$v->admin_tel}}</td>
		<td>{{$v->admin_grade==1?'经理':'业务员'}}</td>
		<td>
			<a href="{{url('admin/edit/'.$v->admin_id)}}">编辑</a>
			<a href="{{url('admin/destory/'.$v->admin_id)}}">删除</a>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$res->appends($query)->links()}}

</body>
</html>


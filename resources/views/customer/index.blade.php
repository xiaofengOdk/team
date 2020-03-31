<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>客户信息列表</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h2>客户信息列表<a style="float:right" href="{{url('/customer/create')}}" class="btn btn-default">添加</a></h2></center><hr/>
<div class="table-responsive">
	
	<table class="table">
	
		<thead>
			<tr>
				<th>id</th>
				<th>客户名字</th>
				<th>客户级别</th>
				<th>客户来源</th>
				<th>业务员</th>
				<th>电话</th>
				<th>手机</th>
				<th>操作</th>
			</tr>
		</thead>
		@foreach($customer as $v)
		<tbody>
			<tr>
				<td>{{$v->c_id}}</td>
				<td>{{$v->c_name}}</td>
				<td>{{$v->c_grade}}</td>
				<td>{{$v->c_from}}</td>
				<td>{{$v->s_name}}</td>
				<td>{{$v->c_tel}}</td>
				<td>{{$v->c_ptel}}</td>
				<td>
					<a href="{{url('/customer/edit/'.$v->c_id)}}" class="btn btn-success">编辑</a>|
					<a href="{{url('/customer/destroy/'.$v->c_id)}}" class="btn btn-danger">删除</a>
				</td>
			</tr>
		@endforeach
		<tr><td colspan=“6>{{$customer->links()}}</td></tr>
	
		</tbody>
</table>
</div>  	

</body>
</html>
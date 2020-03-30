<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 水平表单</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h3>业务员表单添加</h3></center>
<a style="float:right" href="{{url('saleman/index')}}" class="btn btn-default">展示</a>
<form action="{{url('saleman/score')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名称</label>
		<div class="col-sm-6">
			@csrf
			<input type="text" name="s_name">
				<b style="color:red"></b>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">性别</label>
		<div class="col-sm-6">
			<input type="radio" name="s_sex" value="1">男
			<input type="radio" name="s_sex" value="2">女
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">手机号</label>
		<div class="col-sm-6">
			<input type="text" name="s_tel">
		</div>
	</div>
		<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">座机号</label>
		<div class="col-sm-6">
			<input type="text" name="s_ptel">			
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>

</body>
</html>

 
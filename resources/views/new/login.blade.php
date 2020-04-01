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
<center><h3>登录页面</h3></center>
<form action="{{url('new/score')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	@csrf
	{{session('msg')}};
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">账户</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="admin_name">
			<b style="color:red"></b>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">密码</label>
		<div class="col-sm-8">
			<input type="password" class="form-control" id="firstname" name="admin_pwd">
			<b style="color:red"></b>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" align='center' class="btn btn-default">登录</button>
		</div>
	</div>
</form>

</body>
</html>

 
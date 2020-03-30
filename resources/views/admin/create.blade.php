
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
		<a style="float:right" href="{{url('admin/index')}}" class="btn btn-default">展示</a>
<center><h3>管理员表单添加</h3></center>
<form action="{{url('admin/store')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">管理员名称</label>
		<div class="col-sm-6">
			@csrf
			<input type="text" class="form-control" id="firstname" 
				 name="admin_name"  placeholder="请输入管理员名字">
				<b style="color:red">{{$errors->first('admin_name')}}</b>

		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">管理员密码</label>
		<div class="col-sm-6">
			<input type="password" class="form-control" id="lastname" placeholder="请输入管理员密码" name="admin_pwd">
			<b style="color:red">{{$errors->first('admin_pwd')}}</b>
		</div>
	</div>
	
	</div>

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">邮箱</label>
		<div class="col-sm-6">
			<input type="text" name="admin_email" placeholder="邮箱">
			<b style="color:red">{{$errors->first('admin_email')}}</b>

		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">手机号</label>
		<div class="col-sm-6">
			<input type="tel" name="admin_tel" placeholder="手机号">
			<b style="color:red">{{$errors->first('admin_tel')}}</b>
		</div>
	</div>
	

	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">级别</label>
		<div class="col-sm-6">
				<select name="admin_grade">
					<option value="1">经理</option>
					<option value="2">业务员</option>
				</select>

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

 

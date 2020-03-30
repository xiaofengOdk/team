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
<center><h3>拜访会议表单添加</h3></center>
<a style="float:right" href="{{url('visitor/index')}}" class="btn btn-default">展示</a>
<form action="{{url('visitor/score')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">业务员名称</label>
		<div class="col-sm-6">
			@csrf
		<select name="s_id">
			<option value="">请选择</option>
				@foreach($saleman_res as $k=>$v)
			<option value="{{$v->s_id}}">{{$v->s_name}}</option>
				@endforeach
		</select>
				<b style="color:red"></b>

		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户名称</label>
		<div class="col-sm-6">
			<select name="c_id">
				<option value="">请选择</option>
				@foreach($customer_res as $k=>$v)
					<option value="{{$v->c_id}}">{{$v->c_name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问人</label>
		<div class="col-sm-6">
			<input type="text" name="v_man">
				<b style="color:red">{{$errors->first('v_man')}}</b>
		</div>
	</div>
		<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问地址</label>
		<div class="col-sm-6">
			<input type="text" name="v_address">			
				{{$errors->first('v_address')}}
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">访问详情</label>
		<div class="col-sm-6">
			<input type="text" name="v_desc">
				{{$errors->first('v_desc')}}
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

 
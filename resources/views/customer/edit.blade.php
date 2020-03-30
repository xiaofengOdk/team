<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>客户修改</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><h2>客户修改<a style="float:right" href="{{url('/customer/index')}}" class="btn btn-default">列表</a></h2></center><hr/>
<!-- @if ($errors->any()) 
<div class="alert alert-danger">
 <ul>
 	@foreach ($errors->all() as $error) 
 		<li>{{ $error }}</li>
 	@endforeach
 </ul>
</div>
@endif -->

<form action="{{url('/customer/update/'.$customer->c_id)}}" method="post" class="form-horizontal" role="form" >
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户名字</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="c_name" placeholder="客户名字" value="{{$customer->c_name}}">
			<b style="color:red">{{$errors->first('c_name')}}</b>
		</div>
	</div>
	
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">客户级别</label>
		<div class="col-sm-6">
			<select class="form-control" name="c_grade">
					<option value="">请选择</option>
					
					<option value="普通客户">普通客户</option>
					<option value="VIP客户">VIP客户</option>
					<option value="SVIP客户">SVIP客户</option>
					
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户来源</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="c_from" placeholder="客户来源" value="{{$customer->c_from}}">
			<b style="color:red">{{$errors->first('c_from')}}</b>
		</div>
	</div>
		
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">业务员</label>
		<div class="col-sm-6">
			<select class="form-control" name="c_from">
					<option value="">请选择</option>
					
					<option value=""></option>
					
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户电话</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="c_tel" placeholder="请输入客户电话" value="{{$customer->c_tel}}">
			<b style="color:red">{{$errors->first('c_tel')}}</b>
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">客户手机</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="c_ptel" placeholder="请输入客户手机" value="{{$customer->c_ptel}}">
			<b style="color:red">{{$errors->first('c_ptel')}}</b>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">修改</button>
		</div>
	</div>
</form>

</body>
</html>

 
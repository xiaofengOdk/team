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
<center><h3>新闻表单添加</h3></center>
<a style="float:right" href="{{url('new/index')}}" class="btn btn-default">展示</a>
<form action="{{url('new/store')}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻名称</label>
		<div class="col-sm-6">
			
			<input type="text" name="n_title">
				<b style="color:red">{{$errors->first('s_name')}}</b>
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">图片</label>
		<div class="col-sm-6">
			<input type="file" name="n_photo" >
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">图片集合</label>
		<div class="col-sm-6">
			<input type="file" name="n_photos[]" multiple >
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">描述</label>
		<div class="col-sm-6">
				<b style="color:red">{{$errors->first('s_tel')}}</b>
			<input type="text" name="n_desc">
		</div>
	</div>
		<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">分类</label>
		<div class="col-sm-6">
			<select name="c_id">
				<option value="">请选择</option>	
					@foreach($cate_res as $k=>$v)
						<option value="{{$v->c_id}}">{{$v->c_name}}</option>
					@endforeach
			</select>
				<b style="color:red">{{$errors->first('s_ptel')}}</b>
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

 
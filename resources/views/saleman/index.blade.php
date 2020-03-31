<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 边框表格</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<h1 align="center"><a href="/">调回主页</a></h1>
</head>
<body>

<table class="table table-bordered">
	<caption>业务员显示的数据</caption>
	<a style="float:right" href="{{url('saleman/create')}}" class="btn btn-default">添加</a>
	<form>
		名称<input type="text" name="s_name" value="{{$query['s_name']??''}}">
		<input type="submit" value="搜索">
	</form>
	<thead>
		<tr>
			<th>id</th>
			<th>业务员名称</th>
			<th>性别</th>
			<th>电话</th>
			<th>下座机</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach($result as $k=>$v)
		<tr>
		<td>{{$v->s_id}}</td>
		<td>{{$v->s_name}}</td>
		<td>{{$v->s_sex=='1'?"男":"女"}}</td>
		<td>{{$v->s_tel}}</td>
		<td>{{$v->s_ptel}}</td>
		<td>
			<a href="{{url('saleman/edit/'.$v->s_id)}}" class="btn btn-success">编辑</a>
			<a href="{{url('saleman/destroy/'.$v->s_id)}}" class="btn btn-success">删除</a>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
{{$result->appends($query)->links()}}
</body>
</html>
<script type="text/javascript" src="{{asset('static/admin/js/jquery.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.pagination a',function(){
      // alert(1);
      var _this=$(this)
      var url=_this.attr('href')
      // alert(url)
      $.get(url,function(result){
        // console.log(result)
        $('tbody').html(result)
      })
      return false
    })
  })
</script>
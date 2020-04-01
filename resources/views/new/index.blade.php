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
	<thead>
		<tr>
			<th>id</th>
			<th>新闻名称</th>
			<th>新闻分类</th>
			<th>新闻图片</th>
			<th>新闻相册</th>
			<th>时间</th>
			<th>描述</th>
		</tr>
	</thead>
	<tbody>
		@foreach($result as $k=>$v)
		<tr>
			<td>{{$v->n_id}}</td>
			<td>{{$v->n_title}}</td>
			<td>{{$v->c_name}}</td>
			<td>
			<img src="{{env('UPLOADS_URL')}}{{$v->n_photo}}" width="100px" height="100px">
			</td>
			@php $n_photos =explode("|",$v->n_photos); @endphp
				<td>	
					@foreach($n_photos as $vvv)
						<img src="{{env('UPLOADS_URL')}}{{$vvv}}" width="50px" height="50px">
					@endforeach			
				</td>

			<td>{{date("Y-m-d H:i:s",$v->n_time)}}</td>
			<td>{{$v->n_desc}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
{{$result->appends($query)->links()}}
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 边框表格</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-bordered">
	<caption>会议显示的数据</caption>
	<a style="float:right" href="{{url('visitor/create')}}" class="btn btn-default">添加</a>
	<form>
		拜访人<input type="text" name="v_man" value="{{$query['v_man']??''}}">
		地址<input type="text" name="v_address" value="{{$query['v_address']??''}}">
		<input type="submit" value="搜索">
	</form>
	<thead>
		<tr>
			<th>id</th>
			<th>业务员名称</th>
			<th>客户名称</th>
			<th>时间</th>
			<th>下次拜访时间</th>
			<th>地址</th>
			<th>描述</th>
			<th>参与人</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		@foreach($result as $k=>$v)
		<tr>
		<td>{{$v->v_id}}</td>
		<td>{{$v->s_name}}</td>
		<td>{{$v->c_name}}</td>
		<td>{{date("Y-m-d H:i:s",$v->v_time)}}</td>
		<td>{{date("Y-m-d H:i:s",$v->v_ntime)}}</td>
		<td>{{$v->v_address}}</td>
		<td>{{$v->v_desc}}</td>
		<td>{{$v->v_man}}</td>
		<td>
			<a href="{{url('visitor/edit/'.$v->v_id)}}" class="btn btn-success">编辑</a>
			<a href="{{url('visitor/destroy/'.$v->v_id)}}" class="btn btn-success">删除</a>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>
{{$result->appends($query)->links()}}
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
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
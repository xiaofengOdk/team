@foreach($result as $k=>$v)
		<tr>
		<td>{{$v->s_id}}</td>
		<td>{{$v->s_name}}</td>
		<td>{{$v->s_sex=='1'?"男":"女"}}</td>
		<td>{{$v->tel}}</td>
		<td>{{$v->v_ptel}}</td>
		<td>
			<a href="{{url('saleman/edit/'.$v->s_id)}}" class="btn btn-success">编辑</a>
			<a href="{{url('saleman/destroy/'.$v->s_id)}}" class="btn btn-success">删除</a>
		</td>
		</tr>
		@endforeach
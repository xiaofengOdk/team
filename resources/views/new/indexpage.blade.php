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
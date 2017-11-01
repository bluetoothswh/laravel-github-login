@extends('github::layout.common')
@section('title')
	larashuo示范代码 使用github登录
@stop

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col s6 offset-s3" style="margin-top: 50px;">
					<a class="btn-large red" href="{{url('laramall/github')}}">
						使用github登录
					</a>
			</div>
		</div>
	</div>
@stop
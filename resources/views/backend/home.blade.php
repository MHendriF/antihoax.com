@extends('backend.layouts.app')

@section('htmlheader_title')
	Home Dashboard
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Welcome</div>
					<center>
						<div class="panel-body">
							 Hi {{ Auth::user()->name }}, Welcome Back Admin To Home Dashboard!
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
@endsection
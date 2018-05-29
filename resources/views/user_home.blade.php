@extends('layouts.app')

@section('content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel-heading">Dashboard User</div>
				
				<div class="panel-body">
					{{ Auth::user()->nama }}<br>
					{{ Auth::user()->id }}<br>
					Anda Login sebagai user!
				</div>
			</div>
		</div>
	</div>
@endsection
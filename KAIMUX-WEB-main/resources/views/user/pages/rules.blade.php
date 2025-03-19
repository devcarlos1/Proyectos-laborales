@extends('user.layouts.default')

@section('title')
	<title>KAIMUX | Taisyklės</title>
@endsection

@section('hero')
small
@endsection

@section('content')
	<div class="main">
		<div class="row px-10 py-5">
			<div class="col-12 col-sm-6">
				<h3>Projekto taisyklės</h3>
				<ol>
					@foreach ($rules as $rule)
							<li>
								{{$rule->rule}}
								@if ($rule->punishment)
									<br>
									<span class="text-danger">Bausmė: {{$rule->punishment}}</span>
								@endif
							</li>
					@endforeach
				</ol>
			</div>
			<div class="col-12 col-sm-6">
				{!! nl2br($shortText->description) !!}
			</div>
			<div class="col-12 col-sm-12">
				{!! nl2br($longText->description) !!}
			</div>
		</div>
	</div>
@endsection

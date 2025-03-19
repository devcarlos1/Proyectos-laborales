@extends('user.layouts.services')

@section('title')
	<title>KAIMUX | Paslaugos</title>
@endsection

@section('hero')
small
@endsection


@section('services-content')
<div class="modal-dialog w-90">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">
				<strong>{{$title}}</strong> 
				<strike>{{number_format($service->price/100, 2, '.', '')}}€</strike> 
				{{number_format($price/100, 2, '.', '')}}€
			
				@if ($balance >= $price)
					<form action="{{route('deals-buy', [
						'deal' => $dealId,
						])}}" method="POST">
						@csrf
						<input type="submit" class="btn btn-success" value="Užsisakyti">
					</form>
				@else
					<br><a href="{{route('balance-topup', ['username' => $player])}}" class="btn btn-success">Pildyti balansą</a>
				@endif
			</h4>
		</div>
		<div class="modal-body">
			<p>{!! nl2br(preg_replace('/&./', '', $service->description)) !!}</p>
		</div>
	</div>
</div>
@endsection
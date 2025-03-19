@extends('user.layouts.default')

@section('content')
	<div class="main">
		<div id="description">
			<div>
				<i class="fa fa-rocket fa-4x"></i>
				<span>
					<h3>{{$mainPageText[0]->title}}</h3>
					<p>{{$mainPageText[0]->description}}</p>
				</span>
			</div>
			<div>
				<i class="fa fa-user fa-4x"></i>
				<span>
					<h3>{{$mainPageText[1]->title}}</h3>
					<p>{{$mainPageText[1]->description}}</p>
				</span>
			</div>
			<div>
				<i class="fa fa-server fa-4x"></i>
				<span>
					<h3>{{$mainPageText[2]->title}}</h3>
					<p>{{$mainPageText[2]->description}}</p>
				</span>
			</div>
		</div>
		<div id="games">
			<h2>Turimi serveriai</h2>
			@foreach ($games as $key => $game)
				<div class="game {{ $key % 2 == 0 ? 'f' : 'g'}}">
					<div>
						<h3>{{ $game->title }}</h3>
						<p>{{ $game->description }}</p>
					</div>
					<img alt="{{ $game->title }} KAIMUX serveris" class="gimg a" src="{{ $game->image }}">
				</div>

				<hr>
			@endforeach
		</div>
		<div id="staff">
			<div class="staff">
				<h2>Mūsų komanda</h2>
				<div class="row px-10 align-center">
					@php
						$newAdmins = [];
						foreach ($admins as $admin) {
							if ($admin->type == 1) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 2) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 7) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 3) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 4) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 5) {
								array_push($newAdmins, $admin);
							}
						}
						foreach ($admins as $admin) {
							if ($admin->type == 6) {
								array_push($newAdmins, $admin);
							}
						}
						$admins = $newAdmins;
					@endphp
					@foreach ($admins as $admin)
						<div class="col-xs-6 col-sm-2 col-md-2 align-center pt-2">
							<img alt="{{ $admin->name }} minecraft galva" src="https://cravatar.eu/helmhead/{{ $admin->name }}/190.png" width="100%">
							<h3>{{ $admin->name }}</h3>
							@php($type = $admin->type)
							<div class="
							{{ $type === 1 || $type === 2 ? 'owner' :
							 ($type === 3 ? 'manager' :
							 ($type === 4 ? 'overseer' :
							 ($type === 5 ? 'chatmod' :
							 ($type === 6 ? 'support' :
							 ($type === 7 ? 'operator' : '')))))
							 }}
							">{{  
							$type === 1 ? 'Savininkas' :
							($type === 2 ? 'Programuotojas' :
							($type === 3 ? 'Vyr. Prižiūrėtojas' :
							($type === 4 ? 'Prižiūrėtojas' :
							($type === 5 ? 'Pokalbių moderatorius' :
							($type === 6 ? 'Pagalba' :
							($type === 7 ? 'Operatorius' : '')))))
							 )}}</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div id="announcement">
			<div class="an-img">
				<h2>Pranešimai ir naujienos</h2>
				<div class="row align-center">
					<div class="col-12 col-sm-2"></div>
					<div class="col-12 col-sm-8">
						<iframe src="https://e.widgetbot.io/channels/{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_ID)->first()->value}}/{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_CHANNEL)->first()->value}}" height="600" width="95%"></iframe>
					</div>
					<div class="col-12 col-sm-2"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

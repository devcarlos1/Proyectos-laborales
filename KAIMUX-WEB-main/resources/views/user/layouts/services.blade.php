@extends('user.layouts.default')

@section('hero')
small
@endsection

@section('content')
	<div class="main">
		<div class="row px-10 pb-5 pt-3">
			<div class="col-12 col-sm-3 pb-3">
				<div class="services-sidebar">
                    <div class="row d-sm-block d-none">
                        <div class="col-12 col-sm-12 col-xs-12 align-center">
                            <h3>Paskutiniai pirkėjai</h3>
                        </div>
                        @foreach ($lastBuyers as $i => $buyer)
                            <div class="col-12 col-sm-12 col-xs-4 align-center">
                                <img alt="{{ $buyer }} minecraft galva" src="https://cravatar.eu/helmhead/{{ $buyer }}/190.png" width="50%" title="{{$buyer}}">
                            </div>
                        @endforeach
                        <div class="col-12 col-sm-12 col-xs-12 align-center">
                            <h3>Daugiausia paaukojęs</h3>
                        </div>
                        <div class="col-12 col-sm-12 col-xs-4 align-center">
                        </div>
                        <div class="col-12 col-sm-12 col-xs-4 align-center">
                            <img alt="{{$mostDonated}} minecraft galva" src="https://cravatar.eu/helmhead/{{$mostDonated}}/190.png" width="50%" title="{{$mostDonated}}">
                        </div>
                        <div class="col-12 col-sm-12 col-xs-4 align-center">
                        </div>
                    </div>
                    <div class="row d-sm-none d-block">
                        <div class="col-12 col-sm-12 col-xs-6 align-center">
                            <h5>Paskutiniai pirkėjai</h5>
                        </div>
                        <div class="col-12 col-sm-12 col-xs-6 align-center">
                            <h5>Daugiausia paaukojęs</h5>
                        </div>
                        @foreach ($lastBuyers as $i => $buyer)
                            <div class="col-12 col-sm-12 col-xs-2 align-center">
                                <img alt="{{ $buyer }} minecraft galva" src="https://cravatar.eu/helmhead/{{ $buyer }}/190.png" width="100%" title="{{$buyer}}">
                            </div>
                        @endforeach
                        <div class="col-12 col-sm-12 col-xs-2 align-center">
                        </div>
                        <div class="col-12 col-sm-12 col-xs-2 align-center">
                            <img alt="{{$mostDonated}} minecraft galva" src="https://cravatar.eu/helmhead/{{$mostDonated}}/190.png" width="100%" title="{{$mostDonated}}">
                        </div>
                        <div class="col-12 col-sm-12 col-xs-2 align-center">
                        </div>
                    </div>
                </div>
			</div>
            <div class="col-12 col-sm-9">
                <div class="row">
                    <div class="col-12">
                        @isset($username)
                            <div class="row">
                                @isset($goBack)
                                    <div class="col-xs-6 col-sm-2 pb-2 px-0 px-responsive-right-1">
                                        <a href="{{ route('store-main') }}" class="btn btn-info w-100 cart-button">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                                            Grįžti<br>
                                            {{number_format($cartPrice/100, 2, '.', '')}}€
                                        </a>
                                    </div>
                                @else
                                    <div class="col-xs-6 col-sm-2 pb-2 px-0 px-responsive-right-1">
                                        <a href="{{ route('cart') }}" class="btn btn-warning w-100 cart-button">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                                            Krepšelis<br>
                                            {{number_format($cartPrice/100, 2, '.', '')}}€
                                        </a>
                                    </div>
                                @endisset
                                @isset($goBackBalanse)
                                    <div class="col-xs-6 col-sm-2 pb-2 px-0">
                                        <a href="{{ route('store-main') }}" class="btn btn-info w-100 cart-button">
                                            <i class="fa fa-info" aria-hidden="true"></i><br>
                                            Grįžti<br>
                                            {{number_format($balance/100, 2, '.', '')}}€
                                        </a>
                                    </div>
                                @else
                                    <div class="col-xs-6 col-sm-2 pb-2 px-0">
                                        <a href="{{ route('balance-topup') }}" class="btn btn-success w-100 cart-button">
                                            <i class="fa fa-info" aria-hidden="true"></i><br>
                                            Balansas<br>
                                            {{number_format($balance/100, 2, '.', '')}}€
                                        </a>
                                    </div>
                                @endisset
                                <div class="col-xs-12 col-sm-8 px-0 px-responsive-left-1">
                                    <div class="progress progress-striped active">
                                        <button class="btn btn-success raised" data-toggle="collapse" data-target="#monthlyGoal"><strong>Mėnesio tikslas</strong></button>
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$goal}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$goal}}%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="progress progress-striped active">
                                <button class="btn btn-success raised" data-toggle="collapse" data-target="#monthlyGoal"><strong>Mėnesio tikslas</strong></button>
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$goal}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$goal}}%;">
                                </div>
                            </div>
                        @endisset
                        <div id="monthlyGoal" class="collapse">
                            <button class="server-card">
                                <div class="row">
                                    <div class="col-xs-2 col-sm-1">
                                        <img src="/assets/user/img/goal.png" alt="Mėnesio tikslas" class="img-fluid" height="100%" width="100%"/>
                                    </div>
                                    <div class="col-xs-10 col-sm-11">
                                        Kiekvieną mėnesį pasiekus mėnesio tikslą visi žaidėjai, išleidę tą mėnesį daugiau nei 50 eurų, gauna kitam mėnesiui 50% nuolaidų kuponą kitiems 3 pirkiniams!
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 services-main">
                        @yield('services-content')
                    </div>
                </div>
                @foreach ($paymentMethods as $method)
                    <img alt="{{$method->name}}" src="{{$method->image}}" width="100ov" class="mx-3 my-3"/>
                @endforeach
            </div>
	    </div>
	</div>
@endsection

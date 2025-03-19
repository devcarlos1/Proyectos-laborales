@extends('user.layouts.services')

@section('title')
	<title>KAIMUX | Paslaugos</title>
@endsection

@section('hero')
small
@endsection

@section('services-content')
<div class="row">
    {{-- <div class="col-12 col-sm-12 mb-1 w-100">
        <a href="https://discordapp.com/users/{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_CONTACT_PAYPAL)->first()->value}}" class="btn btn-info w-100 text-wrap" target="_blank"><i class="fa fa-paypal"></i> Norėdami užsisakyti paslaugą per PayPal susisiekite per Discord: {{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_CONTACT_PAYPAL_USER)->first()->value}}</a>
    </div> --}}
    @foreach ($mostPopularServices as $i => $service)
        @php ($hash = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6))
        <div class="col-12 col-md-3 col-xs-12">
            <button class="row most-popular-card
            {{ $i === 0 ? 'card-gold' :
                ($i === 1 ? 'card-silver' :
                ($i === 2 ? 'card-bronze' : 'card-bluish'))}}
            " type="button" data-toggle="modal" data-target="#{{$hash}}">
                <div class="col-12 col-lg-6 px-0 align-center">
                    <strong>{{$service->getCategory()->getServer()->title}}</strong><br>
                    <img src="{{$service->image}}" alt="{{$service->title}} nuotrauka" height="60vh">
                </div>
                <div class="col-12 col-lg-6 px-0 align-center">
                    <div class="row">
                        <div class="col-12"><h5><strong>{{$service->title}}</strong></h5></div>
                        <div class="col-12"><h5>{{number_format($service->price/100, 2, '.', '')}}€</h5></div>
                    </div>
                </div>
            </button>
            @include('user.components.service-information', [
                'service' => $service, 
                'hash' => $hash,
                'username' => $username
            ])
        </div>
    @endforeach
    <div class="col-12 col-sm-12">
        @foreach ($servers as $server)
            <div class="card card-body mb-2">
                <button class="server-card" type="button" data-toggle="collapse" data-target="#{{'server-' . $server->id}}">
                    <img src="{{$server->image}}" alt="{{$server->title}}" class="img-fluid" width="50vh"/> <h3 class="inline"><strong>{{$server->title}}</strong></h3> <h3 class="inline align-right dropdown-icon">▾</h3>
                </button>
                <div id="{{'server-' . $server->id}}" class="collapse">
                    <div class="card-block">
                        @foreach ($server->getCategories() as $category)
                            <div class="card card-body">
                                <button class="server-card-category" type="button" data-toggle="collapse" data-target="#{{'server-' . $server->id . '-' . $category->id}}">
                                    <img src="{{$category->image}}" alt="{{$category->title}}" class="img-fluid" width="30vh"/> <h4 class="inline"><strong>{{$category->title}}</strong></h4>  <h4 class="inline align-right dropdown-icon">▾</h4>
                                </button>
                                <div id="{{'server-' . $server->id . '-' . $category->id}}" class="collapse">
                                    <div class="card-block">
                                        @foreach ($category->getServices() as $service)
                                            @php ($hash = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6))
                                            <button class="row server-card-service" type="button" data-toggle="modal" data-target="#{{$hash}}">
                                                <div class="col-sm-6 col-xs-12 px-0">
                                                    <img src="{{$service->image}}" alt="{{$service->title}}" class="img-fluid" width="35vh"/> {{$service->title}}
                                                </div>
                                                <div class="col-sm-6 col-xs-12 px-0 align-right">
                                                    <div class="btn btn-warning w-fixed-30">{{number_format($service->price/100, 2, '.', '')}}€</div>
                                                    <div class="btn btn-success">Pirkti</div>
                                                </div>
                                            </button>
                                            @include('user.components.service-information', [
                                                'service' => $service, 
                                                'hash' => $hash,
                                                'username' => $username
                                            ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

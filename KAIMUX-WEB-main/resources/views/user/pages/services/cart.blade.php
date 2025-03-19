@extends('user.layouts.services')

@section('title')
	<title>KAIMUX | Paslaugos</title>
@endsection

@section('hero')
small
@endsection

@section('services-content')
<div class="row pb-5 pt-2">
    <div class="col-12 col-sm-12">
        @if(\Session::has('success'))
            <div class="pb-1">
                <div class="alert alert-success">
                    Paslaugos sėkmingai buvo duotos žaidime!
                </div>
            </div>
        @endif
        @if(\Session::has('error'))
            <div class="pb-1">
                <div class="alert alert-danger">
                    @if (\Session::get('error') === 1) 
                    Krepšelis yra tuščias! Prašome įsidėti paslaugas į krepšelį.
                    @elseif (\Session::get('error') === 2)
                    Šis nuolaidos kodas jums negalioja! Prašome pasitikrinti ar įvedėte teisingą kodą.
                    @elseif (\Session::get('error') === 3)
                    Jūsų balanse nepakanka pinigų, kad galėtumėte užsisakyti paslaugas. <br>
                    <a href="{{ route('balance-topup') }}">Prašome pasipildyti balansą</a>
                    @endif
                </div>
            </div>
        @endif
        @php ($totalPrice = 0)
        @foreach ($cart as $item)
            @isset($item['service'])
                @php ($service = $item['service'])
                @php ($count = $item['count'])

                @php ($totalPrice += $service->price * $count)

                <button class="server-card" type="button" id="{{$service->id}}">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <img src="{{$service->image}}" alt="{{$service->title}}" class="img-fluid" width="35vh"/> {{$service->title}}
                        </div>
                        <div class="col-sm-6 col-xs-6 align-right">
                            <div class="btn btn-warning">{{number_format($service->price/100, 2, '.', '')}}€</div>
                            <div class="btn btn-warning" id="{{$service->id.'-count'}}">{{ $count }}</div>
                            <div class="btn btn-danger" onClick="minusFromCart('{{$service->id}}')">-</div>
                            <div class="btn btn-success" onClick="plusToCart('{{$service->id}}')">+</div>
                        </div>
                    </div>
                </button>
            @endisset
        @endforeach
        <div class="row d-none d-md-block">
            <form action="{{route('cart-buy', [
                'username' => $username, 
                ])}}" method="POST">
                @csrf
                <div class="col-lg-5 col-sm-6 col-xs-6 pt-1">
                    <input id="discount-code" type="text" class="form-control" name="discount" placeholder="Nuolaidos kodas (nebūtina)">
                    <div id="discount-status1"></div>
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6 pt-1">
                    <input type="button" class="btn btn-success" onclick="checkDiscountCodeForCart('{{$username}}')" value="Tikrinti nuolaidos kodą"> 
                </div>
                <div class="col-lg-5 col-sm-12 col-xs-12 align-right pt-1">
                    <div class="btn btn-warning" id="priceOne">{{ number_format($totalPrice/100, 2, '.', '') }}€</div>
                    <input type="submit" class="btn btn-success" value="Užsisakyti"> 
                </div>
            </form>
        </div>
        <div class="row d-block d-md-none">
            <form action="{{route('cart-buy', [
                'username' => $username, 
                ])}}" method="POST">
                @csrf
                <div class="col-lg-5 col-sm-6 col-xs-6 pt-1">
                    <input id="discount-code" type="text" class="form-control" name="discount" placeholder="Nuolaidos kodas (nebūtina)">
                    <div id="discount-status2"></div>
                </div>
                <div class="col-lg-5 col-sm-6 col-xs-6 align-right pt-1">
                    <div class="btn btn-warning" id="priceTwo">{{ number_format($totalPrice/100, 2, '.', '') }}€</div>
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6 pt-1">
                    <input type="button" class="btn btn-success" onclick="checkDiscountCodeForCart('{{$username}}')" value="Tikrinti nuolaidos kodą"> 
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6 align-right pt-1">
                    <input type="submit" class="btn btn-success" value="Užsisakyti"> 
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

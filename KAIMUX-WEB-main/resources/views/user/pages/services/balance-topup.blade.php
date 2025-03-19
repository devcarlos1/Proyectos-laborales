@extends('user.layouts.services')

@section('title')
	<title>KAIMUX | Paslaugos</title>
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=EUR"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('hero')
small
@endsection

@section('services-content')
<div class="row">
    <div class="col-12 col-sm-12">
        @foreach ($services as $service)
            @php ($hash = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6))
            <button class="row server-card" type="button" data-toggle="modal" data-target="#{{$hash}}">
                <div class="col-sm-6 col-xs-12 px-0">
                    <img src="/assets/user/img/goldnugget_icon32.png" alt="{{$service->title}}" class="img-fluid" width="50vh"/> <h3 class="inline"><strong>{{$service->title}}</strong></h3>
                </div>
                <div class="col-sm-6 col-xs-12 px-0 align-right">
                    <div class="btn btn-warning w-fixed-30">{{number_format($service->price/100, 2, '.', '')}}€</div>
                    <div class="btn btn-success">Pirkti</div>
                </div>
            </button>
            @include('user.components.topup-information', [
                'service' => $service, 
                'hash' => $hash,
                'username' => $username
            ])
        @endforeach
    </div>
    <div class="col-12 col-sm-12">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h3>Papildymas banku</h3>
                @isset($errorAmount)
                    <div class="pb-1">
                        <div class="alert alert-danger">
                            Įvesta suma yra per maža!
                        </div>
                    </div>
                @endisset
                <form action="{{route('balance-buy', ['username' => $username])}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="form-group">
                          <label for="username">Slapyvardis</label>
                          <div class="input-group w-100">
                            <input type="text" placeholder="Slapyvardis" class="form-control" id="username" name="username" value="{{$username}}" onfocusout="changeUsernameForPurchase()">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="amount">Įveskite sumą</label>
                          <div class="input-group w-100">
                            <input type="number" placeholder="Minimali suma: 2€" class="form-control" id="amount" name="amount" required min="2" step="1" onfocusout="checkForMinimal()">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 mb-3"></div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Banku</h4>
                            <p class="card-text">Papildykite savo balansą per banką.</p>
                            <h6 class="card-subtitle mb-2 text-muted">Kaina: <span id="amountToTopUpBanku"></span>€</h6>
                            <button type="submit" class="btn btn-success w-100">Pirkti</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">PayPal</h4>
                            <p class="card-text">Papildykite savo balansą per PayPal.</p>
                            <h6 class="card-subtitle mb-2 text-muted">Kaina: <span id="amountToTopUpPaypal"></span>€</h6>
                            <div id="paypal-button-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-4">
                      Po apmokėjimo balansas bus papildytas: <span id="amountToTopUp"></span>€
                    </div>
                  </form>
                <script>
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    let amount = 2;
                    document.getElementById('amountToTopUp').innerHTML = amount;
                    document.getElementById('amountToTopUpBanku').innerHTML = amount;
                    document.getElementById('amountToTopUpPaypal').innerHTML = (Math.round((1.038 * amount + 0.36) * 100)/100);
                    function checkForMinimal() {
                        if (document.getElementById('amount').value < 2) {
                            document.getElementById('amount').value = 2;
                        }
                        amount = document.getElementById('amount').value;
                        document.getElementById('amountToTopUp').innerHTML = amount;
                        document.getElementById('amountToTopUpBanku').innerHTML = amount;
                        document.getElementById('amountToTopUpPaypal').innerHTML = (Math.round((1.038 * amount + 0.36) * 100)/100);
                    }
                    let username = "{{$username}}";
                    function changeUsernameForPurchase() {
                        username = document.getElementById('username').value;
                    }

                    paypal.Buttons({
                        style: {
                            layout:  'vertical',
                            color:   'gold',
                            shape:   'rect',
                            label: 'checkout',
                            tagline: false,
                            height:  33
                        },
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [
                                    {
                                        description: "Balanso papildymas",

                                        custom_id: Math.floor(Math.random() * 90000000) + 10000000,
                                        soft_descriptor: "Balanso papildymas",
                                        amount: {
                                            currency_code: "EUR",
                                            value: (Math.round((1.038 * amount + 0.36) * 100)/100),
                                            breakdown: {
                                                item_total: {
                                                    currency_code: "EUR",
                                                    value: (Math.round((1.038 * amount + 0.36) * 100)/100)
                                                }
                                            }
                                        },
                                        items: [
                                            {
                                                name: "Balanso papildymas",
                                                description: "Balanso papildymas KAIMUX projekte",
                                                unit_amount: {
                                                    currency_code: "EUR",
                                                    value: (Math.round((1.038 * amount + 0.36) * 100)/100)
                                                },
                                                quantity: "1"
                                            },
                                        ],
                                    }
                                ]
                            });
                        },
                        onApprove(data, actions) {
                            return fetch("/paypal/success", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                body: JSON.stringify({
                                    data : data,
                                    amount: amount,
                                    username: "{{$username}}",
                                })
                            }).then(function (res) {
                                return res.json();
                            }).then(function (details) {
                                window.location.reload();
                            }).catch(function (error) {
                                window.location.reload();
                            });
                        }
                    }).render('#paypal-button-container');
                    </script>
            </div>
        </div>
    </div>
</div>
@endsection

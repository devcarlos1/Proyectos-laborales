@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Užregistruoti užsakymai</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-payments-filter')}}" method="POST" enctype="multipart/form-data">
                        <div class="alert alert-info">Pagal žaidėją</div>
                        {{ csrf_field() }}
                        <input type="text" name="name" placeholder="Slapyvardis" class="form-control"/><br>
                        <input type="submit" name="filter" value="Filtruoti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-payments-filter')}}" method="POST" enctype="multipart/form-data">
                        <div class="alert alert-info">Pagal laiką</div>
                        {{ csrf_field() }}
                        Nuo:
                        <input type="date" name="from" placeholder="Nuo" class="form-control"/>
                        Iki:
                        <input type="date" name="to" placeholder="Iki" class="form-control"/><br>
                        <input type="submit" name="filter" value="Filtruoti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-payments-filter')}}" method="POST" enctype="multipart/form-data">
                        <div class="alert alert-info">Nustatyti filtrai</div>
                        {{ csrf_field() }}
                        <input type="submit" name="filter" value="Šiandien" class="btn btn-success"/>
                        <input type="submit" name="filter" value="Vakar" class="btn btn-success"/>
                        <input type="submit" name="filter" value="Šį mėnesį" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @isset($payments)
        @include('admin.components.crud-table', [
            'model' => 'Payment',
            'name' => 'Visi užsakymai',
            'columns' => [
                'created_at' => 'Data',
                'username' => 'Slapyvardis',
                'service' => 'Paslauga',
                'orderId' => 'Užsakymo ID',
                'orderType' => [
                    'type' => 'enum',
                    'model' => \App\Enumerators\OrderType::class,
                    'name' => 'Tipas'
                ],
                'from' => 'Nuo',
                'amount' => 'Suma',
                'test' => 'Testinis',
                'discountCode' => 'Nuolaidos kodas',
            ],
            'data' => $payments,
            'fields' => [
                'test' => [
                    'type' => 'checkbox',
                    'label' => 'Testinis'
                ]
            ],
            'canAdd' => false,
            'canDelete' => false,
            'canChange' => true,
            'orderType' => 'desc',
        ])
    @endisset
</div>
@endsection

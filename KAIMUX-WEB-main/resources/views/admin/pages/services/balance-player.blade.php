@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Balanso valdymas</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'BalancePlayer',
        'name' => 'Žaidėjų balansai',
        'columns' => [
            'id' => 'ID',
            'name' => 'Slapyvardis',
            'balance' => 'Balansas'
        ],
        'data' => $data,
        'fields' => [
            'name' => [
                'type' => 'text',
                'label' => 'Slapyvardis',
                'placeholder' => 'Slapyvardis'
            ],
            'balance' => [
                'type' => 'number',
                'label' => 'Balansas',
                'placeholder' => 'Balansas'
            ],
        ],
    ])
</div>
@endsection

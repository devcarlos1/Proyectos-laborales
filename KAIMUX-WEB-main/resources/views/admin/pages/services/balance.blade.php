@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Balanso pildymas</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'BalanceFilling',
        'name' => 'Balanso pildymo paslaugos',
        'columns' => [
            'title' => 'Pavadinimas',
            'description' => 'Aprašymas',
            'price' => 'Kaina',
            'topup' => 'Papildymo suma',
            'key' => 'Raktažodis'
        ],
        'data' => $data,
        'fields' => [
            'title' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas'
            ],
            'description' => [
                'type' => 'textarea',
                'label' => 'Aprašymas',
                'placeholder' => 'Aprašymas'
            ],
            'price' => [
                'type' => 'number',
                'label' => 'Kaina (centais)',
                'placeholder' => 'Kaina'
            ],
            'topup' => [
                'type' => 'number',
                'label' => 'Papildymo suma (centais)',
                'placeholder' => 'Papildymo suma'
            ],
            'key' => [
                'type' => 'text',
                'label' => 'Raktažodis',
                'placeholder' => 'Raktažodis'
            ],
        ],
    ])
</div>
@endsection

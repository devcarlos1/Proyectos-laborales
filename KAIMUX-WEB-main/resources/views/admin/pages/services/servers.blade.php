@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Serveriai</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'Server',
        'name' => 'Serveriai',
        'columns' => [
            'id' => 'ID',
            'title' => 'Pavadinimas',
            'rconIp' => 'RCON IP',
            'rconPort' => 'RCON Port',
            'rconPass' => 'RCON Pass',
            'line' => 'Eilė',
            'image' => 'Nuotrauka'
        ],
        'data' => $servers,
        'fields' => [
            'title' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas'
            ],
            'rconIp' => [
                'type' => 'text',
                'label' => 'RCON IP',
                'placeholder' => 'RCON IP'
            ],
            'rconPort' => [
                'type' => 'text',
                'label' => 'RCON Port',
                'placeholder' => 'RCON Port'
            ],
            'rconPass' => [
                'type' => 'text',
                'label' => 'RCON Pass',
                'placeholder' => 'RCON Pass'
            ],
            'line' => [
                'type' => 'number',
                'label' => 'Eilė',
                'placeholder' => 'Eilė'
            ],
            'image' => [
                'type' => 'image',
                'label' => 'Nuotrauka',
                'placeholder' => 'Nuotrauka'
            ]
        ],
    ])
</div>
@endsection

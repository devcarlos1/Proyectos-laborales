@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kategorijos</li>
    </ol>
    @php
        $serversOptions = [];
        foreach ($servers as $server) {
            $serversOptions[$server->id] = $server->title;
        }
    @endphp
    @foreach ($data as $title => $categories)
        @include('admin.components.crud-table', [
            'model' => 'Category',
            'name' => $title . ' kategorijos',
            'columns' => [
                'title' => 'Pavadinimas',
                'line' => 'Eilė',
                'icon' => 'MC ikona',
                'image' => 'Nuotrauka',
            ],
            'data' => $categories,
            'fields' => [
                'title' => [
                    'type' => 'text',
                    'label' => 'Pavadinimas',
                    'placeholder' => 'Pavadinimas'
                ],
                'server' => [
                    'type' => 'select',
                    'label' => 'Serveris',
                    'options' => $serversOptions
                ],
                'line' => [
                    'type' => 'number',
                    'label' => 'Eilė',
                    'placeholder' => 'Eilė'
                ],
                'icon' => [
                    'type' => 'text',
                    'label' => 'MC Ikona',
                    'placeholder' => 'MC Ikona'
                ],
                'image' => [
                    'type' => 'image',
                    'label' => 'Nuotrauka',
                    'placeholder' => 'Nuotrauka'
                ]
            ],
        ])
    @endforeach
</div>
@endsection

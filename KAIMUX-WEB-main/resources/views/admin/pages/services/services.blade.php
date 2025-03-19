@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Paslaugos</li>
    </ol>
    @php
        $categoriesOptions = [];
        foreach ($categories as $category) {
            $categoriesOptions[$category->id] = $category->getServer()->title . ' ' . $category->title;
        }
    @endphp
    @foreach ($data as $title => $services)
    @include('admin.components.crud-table', [
        'model' => 'Service',
        'name' => $title . ' Paslaugos',
        'columns' => [
            'title' => 'Pavadinimas',
            'description' => 'Aprašymas',
            'price' => 'Kaina',
            'package' => 'Paketas',
            'line' => 'Eilė',
            'icon' => 'MC ikona',
            'image' => 'Nuotrauka'
        ],
        'data' => $services,
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
            'category' => [
                'type' => 'select',
                'label' => 'Kategorija',
                'options' => $categoriesOptions
            ],
            'price' => [
                'type' => 'number',
                'label' => 'Kaina (centais)',
                'placeholder' => 'Kaina'
            ],
            'package' => [
                'type' => 'text',
                'label' => 'Paketas',
                'placeholder' => 'Paketas'
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

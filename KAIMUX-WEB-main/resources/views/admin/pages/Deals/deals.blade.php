@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Pasiūlymų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pasiūlymai</li>
    </ol>
    @php
        $serviceOptions = [];
        foreach ($services as $service) {
            $serviceOptions[$service->id] = $service->getCategory()->getServer()->title . ' ' . $service->getCategory()->title . ' ' . $service->title;
        }
        $dealOptions = [];
        $dealOptions[null] = 'Nėra';
        foreach ($deals as $deal) {
            $dealOptions[$deal->id] = $deal->title;
        }
    @endphp
    @include('admin.components.crud-table', [
        'model' => 'Deal',
        'name' => 'Pasiūlymai',
        'columns' => [
            'title' => 'Pavadinimas',
            'server' => 'Serveris',
            'service' => [
                'type' => 'model',
                'name' => 'Paslauga',
                'column' => 'title',
                'model' => \App\Models\Service::class,
            ],
            'price' => 'Kaina',
            'infoTable' => 'Lentelės informacija',
            'infoFull' => 'Pilna informacija',
            'dealType' => [
                'type' => 'enum',
                'name' => 'Tipas',
                'model' => \App\Enumerators\DealType::class,
            ],
            'betterDeal' => 'Geresnis pasiūlymas',
        ],
        'data' => $deals,
        'fields' => [
            'title' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas'
            ],
            'server' => [
                'type' => 'text',
                'label' => 'Serveris',
                'placeholder' => 'Serveris'
            ],
            'service' => [
                'type' => 'select',
                'label' => 'Paslauga',
                'options' => $serviceOptions,
            ],
            'price' => [
                'type' => 'number',
                'label' => 'Kaina',
                'placeholder' => 'Kaina'
            ],
            'infoTable' => [
                'type' => 'textarea',
                'label' => 'Informacija į lentelę',
                'placeholder' => 'Informacija į lentelę'
            ],
            'infoFull' => [
                'type' => 'textarea',
                'label' => 'Pilna informacija',
                'placeholder' => 'Pilna informacija'
            ],
            'dealType' => [
                'type' => 'enum',
                'label' => 'Tipas',
                'options' => $dealTypes,
                'model' => \App\Enumerators\DealType::class,
            ],
            'betterDeal' => [
                'type' => 'select',
                'label' => 'Geresnis pasiūlymas',
                'options' => $dealOptions,
            ]
        ],
    ])
</div>
@endsection

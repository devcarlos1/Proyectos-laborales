@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Nuolaidų kodai</h1>
    @php
        $serviceOptions = [];
        foreach ($services as $service) {
            $serviceOptions[$service->id] = $service->getCategory()->getServer()->title . ' - ' . $service->getCategory()->title . ' - ' . $service->title;
        }
    @endphp
    @include('admin.components.crud-table', [
        'model' => 'DiscountCode',
        'name' => 'Nuolaidų kodai',
        'columns' => [
            'title' => 'Pavadinimas',
            'amount' => 'Nuolaida',
            'code' => 'Kodas',
            'valid_from' => 'Galioja nuo',
            'valid_to' => 'Galioja iki',
            'limit' => 'Limitas',
            'valid_for' => 'Galioja žaidėjui',
            'valid_for_service' => 'Galioja paslaugai',
            'uses' => 'Panaudotas',
        ],
        'data' => $codes,
        'fields' => [
            'title' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas',
                'required' => true
            ],
            'amount' => [
                'type' => 'number',
                'label' => 'Nuolaida',
                'placeholder' => 'Nuolaida',
                'required' => true
            ],
            'code' => [
                'type' => 'text',
                'label' => 'Kodas',
                'placeholder' => 'Kodas',
                'required' => true
            ],
            'valid_from' => [
                'type' => 'date',
                'label' => 'Galioja nuo',
                'placeholder' => 'Galioja nuo',
                'required' => true
            ],
            'valid_to' => [
                'type' => 'date',
                'label' => 'Galioja iki',
                'placeholder' => 'Galioja iki',
                'required' => true
            ],
            'limit' => [
                'type' => 'number',
                'label' => 'Limitas',
                'placeholder' => 'Limitas'
            ],
            'valid_for' => [
                'type' => 'text',
                'label' => 'Galioja žaidėjui',
                'placeholder' => 'Galioja žaidėjui'
            ],
            'valid_for_service' => [
                'type' => 'select',
                'label' => 'Paslauga',
                'options' => $serviceOptions,
                'allowEmpty' => true
            ]
        ],
    ])
</div>
@endsection

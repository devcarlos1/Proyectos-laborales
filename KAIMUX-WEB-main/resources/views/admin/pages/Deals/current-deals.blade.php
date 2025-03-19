@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Pasiūlymų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pasiūlymai</li>
    </ol>
    @php
        $dealOptions = [];
        foreach ($deals as $deal) {
            $dealOptions[$deal->id] = $deal->title;
        }
    @endphp
    @include('admin.components.crud-table', [
        'model' => 'CurrentDeal',
        'name' => 'Pasiūlymai',
        'columns' => [
            'player' => 'Žaidėjas',
            'servername' => 'Serveris',
            'deal' => [
                'type' => 'model',
                'name' => 'Pasiulymas',
                'column' => 'title',
                'model' => \App\Models\Deal::class,
            ],
            'status' => [
                'type' => 'enum',
                'name' => 'Statusas',
                'model' => \App\Enumerators\CurrentDealStatus::class,
            ],
        ],
        'data' => $currentDeals,
        'fields' => [
            'player' => [
                'type' => 'text',
                'label' => 'Žaidėjas',
                'placeholder' => 'Žaidėjas'
            ],
            'servername' => [
                'type' => 'text',
                'label' => 'Serveris',
                'placeholder' => 'Serveris'
            ],
            'deal' => [
                'type' => 'select',
                'label' => 'Pasiūlymas',
                'options' => $dealOptions
            ],
            'slug' => [
                'type' => 'text',
                'label' => 'Adresas',
                'placeholder' => 'Adresas'
            ],
            'status' => [
                'type' => 'enum',
                'label' => 'Statusas',
                'options' => $statuses,
                'model' => \App\Enumerators\CurrentDealStatus::class,
            ]
        ],
    ])
</div>
@endsection

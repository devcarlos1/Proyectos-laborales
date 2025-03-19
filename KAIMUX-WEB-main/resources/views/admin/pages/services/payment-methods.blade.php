@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Paslaugų valdymas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Užsakymo būdai</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'PaymentMethod',
        'name' => 'Visi užsakymų būdai',
        'columns' => [
            'id' => 'ID',
            'name' => 'Pavadinimas',
            'image' => 'Nuotrauka',
        ],
        'data' => $data,
        'fields' => [
            'name' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas',
            ],
            'image' => [
                'type' => 'image',
                'label' => 'Nuotrauka',
            ],
        ],
        'canAdd' => true,
        'canDelete' => true,
        'canChange' => true,
    ])
</div>
@endsection

@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Puslapio konstantos</h1>
    @include('admin.components.crud-table', [
        'model' => 'Constant',
        'name' => 'Konstantos',
        'columns' => [
            'type' => 'Tipas',
            'value' => 'Reikšmė'
        ],
        'data' => $data,
        'fields' => [
            'type' => [
                'type' => 'text',
                'label' => 'Tipas',
                'placeholder' => 'Tipas',
                'disabled' => true
            ],
            'value' => [
                'type' => 'textarea',
                'label' => 'Reikšmė',
                'placeholder' => 'Reikšmė'
            ],
        ],
        'canChange' => true,
        'canDelete' => false,
        'canAdd' => false,
    ])
</div>
@endsection

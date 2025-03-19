@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Klausimai į administratorių gretas</h1>
    
    @include('admin.components.crud-table', [
        'model' => 'AdditionalQuestion',
        'name' => 'Visi klausimai',
        'columns' => [
            'question' => 'Klausimas',
        ],
        'data' => $data,
        'fields' => [
            'question' => [
                'type' => 'textarea',
                'label' => 'Klausimas',
                'placeholder' => 'Klausimas'
            ],
        ],
        'canChange' => true,
        'canDelete' => true,
        'canAdd' => true,
    ])
</div>
@endsection

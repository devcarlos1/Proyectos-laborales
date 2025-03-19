@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Klausimai į administratorių gretas</h1>
    
    @include('admin.components.crud-table', [
        'model' => 'Question',
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
            'option_1' => [
                'type' => 'text',
                'label' => 'Atsakymas 1',
                'placeholder' => 'Atsakymas 1'
            ],
            'option_2' => [
                'type' => 'text',
                'label' => 'Atsakymas 2',
                'placeholder' => 'Atsakymas 2'
            ],
            'option_3' => [
                'type' => 'text',
                'label' => 'Atsakymas 3',
                'placeholder' => 'Atsakymas 3'
            ],
            'option_4' => [
                'type' => 'text',
                'label' => 'Atsakymas 4',
                'placeholder' => 'Atsakymas 4'
            ],
            'correct_option' => [
                'type' => 'select',
                'label' => 'Teisingas atsakymas',
                'options' => [
                    '1' => 'Atsakymas 1',
                    '2' => 'Atsakymas 2',
                    '3' => 'Atsakymas 3',
                    '4' => 'Atsakymas 4',
                ],
            ],
        ],
        'canChange' => true,
        'canDelete' => true,
        'canAdd' => true,
    ])
</div>
@endsection

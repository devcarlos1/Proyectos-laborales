@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Patekusių anketos</h1>
    
    @include('admin.components.crud-table', [
        'model' => 'AttemptsToSupport',
        'name' => 'Visi bandymai',
        'columns' => [
            'username' => 'Naudotojas',
            'correct_persentage' => 'Procentas teisingai atsakyta',
            'additional_anwsers' => 'Papildomi atsakymai',
        ],
        'data' => $data,
        'fields' => [],
        'canChange' => false,
        'canDelete' => true,
        'canAdd' => false,
    ])
</div>
@endsection

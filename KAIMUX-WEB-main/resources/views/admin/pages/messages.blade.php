@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Gautos žinutės</h1>
    @include('admin.components.crud-table', [
        'model' => 'Message',
        'name' => 'Žinutės',
        'columns' => [
            'name' => 'Vardas',
            'email' => 'El. Paštas',
            'message' => 'Žinutė',
            'created_at' => 'Sukurta'
        ],
        'data' => $data,
        'fields' => [],
        'canChange' => false,
        'canDelete' => true,
        'canAdd' => false,
    ])
</div>
@endsection

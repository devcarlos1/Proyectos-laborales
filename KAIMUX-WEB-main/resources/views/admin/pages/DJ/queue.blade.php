@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Muzikos puslapis</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dabartinis Queue sąrašas</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'DJQueue',
        'name' => 'DJ Queue sąrašas',
        'columns' => [
            'id' => 'ID',
            'music' => 'Muzika',
            'username' => 'Naudotojas',
            'status' => [
                'type' => 'enum',
                'model' => \App\Enumerators\DJStatus::class,
                'name' => 'Statusas'
            ],
            'start' => 'Pradžia',
            'end' => 'Pabaiga',
        ],
        'data' => $data,
        'fields' => [
        ],
        'canChange' => false,
        'canDelete' => true,
        'canAdd' => false,
    ])
</div>
@endsection

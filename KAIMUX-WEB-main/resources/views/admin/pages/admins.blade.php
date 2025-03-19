@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Administratoriai</h1>
    
    @include('admin.components.crud-table', [
        'model' => 'Admin',
        'name' => 'Visi administratoriai',
        'columns' => [
            'name' => 'Name',
            'type' => [
                'name' => 'Admin level',
                'type' => 'enum',
                'model' => \App\Enumerators\AdminType::class
            ]
        ],
        'data' => $users,
        'fields' => [
            'name' => [
                'type' => 'text',
                'label' => 'Slapyvardis',
                'placeholder' => 'Slapyvardis'
            ],
            'type' => [
                'type' => 'enum',
                'label' => 'Admin lygis',
                'options' => $levels,
                'model' => \App\Enumerators\AdminType::class
            ]
        ],
    ])
</div>
@endsection

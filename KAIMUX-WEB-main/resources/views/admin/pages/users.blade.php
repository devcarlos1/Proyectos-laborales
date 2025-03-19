@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Administratoriai</h1>
    @include('admin.components.crud-table', [
        'model' => 'User',
        'name' => 'Visi administratoriai',
        'columns' => [
            'name' => 'Name',
            'admin' => [
                'name' => 'Admin level',
                'type' => 'enum',
                'model' => \App\Enumerators\AdminLevel::class
            ]
        ],
        'data' => $users,
        'fields' => [
            'name' => [
                'type' => 'text',
                'label' => 'Slapyvardis',
                'placeholder' => 'Slapyvardis'
            ],
            'password' => [
                'type' => 'text',
                'label' => 'Slaptažodis',
                'placeholder' => 'Slaptažodis',
                'hideValue' => true
            ],
            'admin' => [
                'type' => 'enum',
                'label' => 'Admin lygis',
                'options' => $levels,
                'model' => \App\Enumerators\AdminLevel::class
            ]
        ],
    ])
</div>
@endsection

@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Muzikos puslapis</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Grojaraštis</li>
    </ol>
    @include('admin.components.crud-table', [
        'model' => 'DJDefaultPlaylist',
        'name' => 'Grojaraštis',
        'columns' => [
            'music' => 'Muzika'
        ],
        'data' => $data,
        'fields' => [
            'music' => [
                'type' => 'text',
                'label' => 'Muzika',
                'placeholder' => 'Muzika'
            ],
        ],
        'canChange' => true,
        'canDelete' => true,
        'canAdd' => true,
    ])
</div>
@endsection

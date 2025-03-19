@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Pagrindinis puslapis</h1>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-main-changeFirstText')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$firstText[0]->id}}">
                        <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="{{$firstText[0]->title}}"/><br>
                        <textarea name="description" placeholder="Aprašymas" class="form-control">{{$firstText[0]->description}}</textarea><br>
                        <input type="submit" name="new" value="Keisti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-main-changeFirstText')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$firstText[1]->id}}">
                        <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="{{$firstText[1]->title}}"/><br>
                        <textarea name="description" placeholder="Aprašymas" class="form-control">{{$firstText[1]->description}}</textarea><br>
                        <input type="submit" name="new" value="Keisti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-main-changeFirstText')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$firstText[2]->id}}">
                        <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="{{$firstText[2]->title}}"/><br>
                        <textarea name="description" placeholder="Aprašymas" class="form-control">{{$firstText[2]->description}}</textarea><br>
                        <input type="submit" name="new" value="Keisti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.crud-table', [
        'model' => 'Game',
        'name' => 'Visi žaidimai',
        'columns' => [
            'title' => 'Name',
            'description' => 'Aprašymas',
            'image' => 'Nuotrauka',
        ],
        'data' => $games,
        'fields' => [
            'title' => [
                'type' => 'text',
                'label' => 'Pavadinimas',
                'placeholder' => 'Pavadinimas'
            ],
            'description' => [
                'type' => 'textarea',
                'label' => 'Aprašymas',
                'placeholder' => 'Aprašymas'
            ],
            'image' => [
                'type' => 'image',
                'label' => 'Nuotrauka'
            ]
        ],
    ])
</div>
@endsection

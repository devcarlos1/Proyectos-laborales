@extends('admin.admin-layout')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Taisyklės</h1>
    @include('admin.components.crud-table', [
        'model' => 'Rule',
        'name' => 'Taisyklės',
        'columns' => [
            'rule' => 'Taisyklė',
            'servers' => 'Serveriai',
            'punishment' => 'Bausmė',
        ],
        'data' => $rules,
        'fields' => [
            'rule' => [
                'type' => 'textarea',
                'label' => 'Taisyklė',
                'placeholder' => 'Taisyklė'
            ],
            'servers' => [
                'type' => 'text',
                'label' => 'Serveriai',
                'placeholder' => '* - visi | survival,skyblock,creative,boxpvp,prison'
            ],
            'punishment' => [
                'type' => 'textarea',
                'label' => 'Bausmė',
                'placeholder' => 'Bausmė'
            ],
        ],
    ])
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-main-changeFirstText')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @isset($firstText[3])
                            <input type="hidden" name="id" value="{{$firstText[3]->id}}">
                            <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="TOS Informacija"/><br>
                            <textarea name="description" placeholder="Aprašymas" class="form-control">{{$firstText[3]->description}}</textarea><br>
                        @else
                            <input type="hidden" name="id" value="4">
                            <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="TOS Informacija"/><br>
                            <textarea name="description" placeholder="Aprašymas" class="form-control">Tekstas</textarea><br>
                        @endisset
                        <input type="submit" name="new" value="Keisti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <form action="{{route('admin-main-changeFirstText')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @isset($firstText[4])
                            <input type="hidden" name="id" value="{{$firstText[4]->id}}">
                            <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="{{$firstText[4]->title}}"/><br>
                            <textarea name="description" placeholder="Aprašymas" class="form-control">{{$firstText[4]->description}}</textarea><br>
                        @else
                            <input type="hidden" name="id" value="5">
                            <input type="text" name="title" placeholder="Pavadinimas" class="form-control" value="Taisyklių pažeidimai"/><br>
                            <textarea name="description" placeholder="Aprašymas" class="form-control">Tekstas</textarea><br>
                        @endisset
                        <input type="submit" name="new" value="Keisti" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

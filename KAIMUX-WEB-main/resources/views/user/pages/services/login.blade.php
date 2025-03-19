@extends('user.layouts.services')

@section('title')
	<title>KAIMUX | Paslaugos</title>
@endsection

@section('hero')
small
@endsection

@section('services-content')
<div class="row pb-5 pt-2">
    <div class="col-12 col-sm-3">
        
    </div>
    <div class="col-12 col-sm-6">
        @if (\Session::has('error'))
            <div class="pb-1">
                <div class="alert alert-danger">
                    {!! \Session::get('error') !!}
                </div>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="pb-1">
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            </div>
        @endif
        <form action="{{route('store-user-login')}}" method="POST">
            @csrf
            <div class="align-center pb-1">
                <input class="form-control"  type="input" name="username" placeholder="Slapyvardis">
            </div>
            <div class="align-center pb-1">
                <input class="form-control"  type="password" name="password" placeholder="Slaptažodis">
            </div>
            <div class="pb-1">
                <input type="checkbox" name="terms" value="1"> Sutinku su <a href="{{route('rules')}}">paslaugų teikimo sąlygomis</a>
            </div>
            <div class="align-center">
                <input type="submit" class="btn btn-success" value="Tęsti">
            </div>
            <div class="pt-4">
                @php($textForParents = \App\Models\Constant::where('type', App\Enumerators\ConstantType::MESSAGE_FOR_PARENTS)->first()->value)
                {!! nl2br(e($textForParents)) !!}
            </div>
        </form>
    </div>
    <div class="col-12 col-sm-3">
        
    </div>
</div>
@endsection

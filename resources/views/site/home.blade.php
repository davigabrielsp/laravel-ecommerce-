@extends('site.layouts.app')

@section('content')
<h1>Home</h1>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-3">
            <div class="card text-center">
                <h5>Produto 1</h5>
                <img src="{{asset('assets/images/iphone.jpg')}}" alt="" width="120">
                <a href="#" class="btn btn-info">Adicionar</a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <h5>Produto 1</h5>
                <img src="{{asset('assets/images/iphone.jpg')}}" alt="" width="120">
                <a href="#" class="btn btn-info">Adicionar</a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <h5>Produto 1</h5>
                <img src="{{asset('assets/images/iphone.jpg')}}" alt="" width="120">
                <a href="#" class="btn btn-info">Adicionar</a>
            </div>
        </div>
    </div>
</div>

@endsection

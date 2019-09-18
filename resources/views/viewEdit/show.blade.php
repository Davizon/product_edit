@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Product: {{$editProducts->sku}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/view_edits">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="{{$editProducts->detailed_image}}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/view_edits/create">New Product</a>
        </div>
    </div>
@endsection

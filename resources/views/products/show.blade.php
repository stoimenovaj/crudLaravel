@extends('products.layout')
@section('content')

            <strong>Name:</strong>{{$product->name}} <br>
            <strong>Detail:</strong>{{$product->detail}}
            <br>
    <a class="btn btn-primary" href="{{route('products.index')}}">Back to products</a>




@endsection

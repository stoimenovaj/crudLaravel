@extends('products.layout')
@section('content')
<h3>Edit product</h3>
{{--    <strong>Name:</strong>{{$product->name}} <br>--}}
{{--    <strong>Detail:</strong>{{$product->detail}}--}}
    <br>
    <a class="btn btn-primary" href="{{route('products.index')}}">Back to products</a>

<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea name="detail" placeholder="Detail" class="form-control">{{$product->detail}}</textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection

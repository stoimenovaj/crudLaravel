@extends('products.layout')
@section('content')
    <div class="pull-left">
        <h3>Laravel 6 Crud Application from Scratch </h3>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->detail}}</td>
                <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('products.show',$product->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <div class="row">
        <div class="col-lg-12">

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}">Create new product</a>
            </div>
        </div>
    </div>
@endsection

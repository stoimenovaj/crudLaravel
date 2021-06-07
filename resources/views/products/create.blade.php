@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-lefts">
                <h3>Add new product </h3>
            </div>
            <div class="pull-rights">
                <a class="btn btn-success" href="{{route('products.index')}}">Back to Products</a>
            </div>
        </div>
    </div>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea name="detail" placeholder="Detail" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

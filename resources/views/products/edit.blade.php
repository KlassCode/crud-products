@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit- {{$product->name}}</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> there were some problems with your input.<br><br>
            <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update',$product) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Name:</strong>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Detail:</strong>
        <textarea class="form-control" style="height:150px" name="detail">{{$product->detail}}</textarea>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
@endsection
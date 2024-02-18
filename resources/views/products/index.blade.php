@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}">New Product</a>
            </div>
        </div>
    </div>
    @if ($message = session()->get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td></td>
                <td>{{$product->name}}</td>
                <td>{{$product->detail}}</td>
                <td>
                    <form action="{{route('products.destroy',$product)}}" method="POST">
                        <a href="{{route('products.show',$product)}}" class="btn btn-info">show</a>
                        <a href="{{route('products.edit',$product)}}" class="btn btn-primary">edit</a>
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{!! $products->links() !!}} --}}
@endsection
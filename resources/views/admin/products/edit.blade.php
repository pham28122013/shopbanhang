@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit
                        <small>Product</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('products.update',$product->id)}}" method="POST">
                        <input type="hidden" name="_method" value="put" /> 
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" value="{{$product->name}}" name="name" placeholder="" />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('name')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input  class="form-control" value="{{$product->price}}" name="price" placeholder="" />
                            @if ($errors->has('price'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('price')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" value="{{$product->code}}" class="form-control" name="code" placeholder="" />
                            @if ($errors->has('code'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('code')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" value="{{$product->quantity}}" class="form-control" name="quantity" placeholder="" />
                            @if ($errors->has('quantity'))
                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('quantity')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image Product</label>
                            <img width="80px" src="{{ asset('/images/product/'.$product->images->first()->url) }}">
                        <input type="file" accept="image/*" name="image" value="{{$product->images->first()->url}}">
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách
                        <small> thể loại </small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
               
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá Tiền</th>
                            <th>Code</th>
                            <th>Số lượng</th>
                            <th>Hình ảnh</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="text-center">
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->quantity}}</td>
                            
                            <td><img width="80px" src="{{ asset('/images/product/'.$product->images->first()->url) }}"></td>
                            <td class="d-flex align-items-center justify-content-around boder">
                            <form action="" method="get">
                                <button class="btn btn-sm btn-primary   rounded-0">
                                Show
                                </button>
                            </form>
                        <form action="{{route('products.create')}}" method="get">
                                <button class="btn btn-sm btn-success   rounded-0">
                                Create
                                </button>
                            </form>
                            <form action="" method="get">
                                <button class="btn btn-sm btn-warning   rounded-0">
                                Edit
                                </button>
                            </form>
                            <form action="" method="post">
                                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                                <button class="btn btn-sm btn-danger   rounded-0">
                                Delete
                                </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
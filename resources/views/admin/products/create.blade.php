@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Create
                            <small>products</small>
                        </h1>
                    <form action="{{route('products.store')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" value="" name="name" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="text" min="0" value="" class="form-control" name="price" placeholder="Please Enter Price" />
                        </div>
                        <div class="form-group">
                            <label>Giảm %</label>
                            <input type="text" min="0" value="" class="form-control" name="code" placeholder="Please Enter Sale" />
                        </div>
                        <div class="form-group">
                            <label>so luong</label>
                            <input type="text" min="0" value="" class="form-control" name="quantity" placeholder="Please Enter Sale" />
                        </div>
                        <div class="form-group">
                            <label>Up hình sản phẩm</label>
                            <input type="file" accept="image/*" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Reset</button>  
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
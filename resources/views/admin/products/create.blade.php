@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Create
                            <small>products</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                            <div class="form-group">
                                <label>Up hình ảnh chi tiết</label>
                                <input type="file" accept="image/*" name="imagesDetail[]">
                            </div>
                    </div>
                </div>
            <form>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
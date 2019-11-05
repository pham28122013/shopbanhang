@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
                            <small>sản phẩm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" value="" name="txtName" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" min="0" value="" class="form-control" name="txtPrice" placeholder="Please Enter Price" />
                        </div>
                        <div class="form-group">
                            <label>Giảm %</label>
                            <input type="number" min="0" value="" class="form-control" name="txtSale" placeholder="Please Enter Sale" />
                        </div>
                        <div class="form-group">
                            <label>Up hình sản phẩm</label>
                            <p><img width="200" src=""></p>
                            <input type="file" accept="image/*" name="image">
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Reset</button>  
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
<style type="text/css">
    .box_detail{
        position: relative;
    }
    .box_detail a{
        width: 25px;
        height: 25px;
        position: absolute;
        top: -7px;
        right: -7px;
    }
</style>
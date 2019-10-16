@extends('admin.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm
                        <small>user</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" value="" name="txtUser" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="" class="form-control" name="txtEmail" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" min="0" class="form-control" value="" name="phone" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Xác nhận xật khẩu</label>
                            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                        </div>
                        <div class="form-group">
                            <label>User Level</label>
                            <label class="radio-inline">
                                <input name="rdoLevel" value="1" checked="" type="radio">Admin
                            </label>
                            <label class="radio-inline">
                                <input name="rdoLevel" value="0" type="radio">Member
                            </label>
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
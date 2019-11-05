@extends('admin.dashboards.master')
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
                    <form action="{{route('users.store')}}" method="POST">
                    <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                        <div class="form-group">
                            <label>Role Id</label>
                            <input class="form-control" value="" name="role_id" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" value="" name="name" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" min="0" class="form-control" value="" name="phone" placeholder="Please Enter Username" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="" class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Active</label>
                            <input type="password" class="form-control" name="is_active" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>Remember</label>
                            <input type="password" class="form-control" name="remember_token" placeholder="Please Enter Password" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
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
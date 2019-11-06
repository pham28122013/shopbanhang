@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sửa
                        <small>user</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('users.update',$user->id)}}" method="POST">
                    <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" value="{{$user->name}}" name="name" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input  class="form-control" value="{{$user->phone}}" name="phone" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="{{$user->email}}" class="form-control" name="email" placeholder="" />
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
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
@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create
                        <small>user</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{route('users.store')}}" method="POST">
                        <input type="hidden" name="_method" value="post" /> 
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>User Role</label>
                                <label class="radio-inline">
                                    <input name="role_id" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="role_id" value="2" type="radio">Sub_Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="role_id" value="3" type="radio">User
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" value="" name="name" placeholder="Please Enter Username" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="Phone" class="form-control" value="" name="phone" placeholder="Please Enter Phone" required="required" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" value="" class="form-control" name="email" placeholder="Please Enter Email" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <label class="radio-inline">
                                    <input name="is_active" value="0" checked="" type="radio">Inactive
                                </label>
                                <label class="radio-inline">
                                    <input name="is_active" value="1" type="radio">Active
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Remember</label>
                                <input type="password" class="form-control" name="remember_token" placeholder="" />
                            </div>
                        <button type="submit" class="btn btn-default">Create</button>
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
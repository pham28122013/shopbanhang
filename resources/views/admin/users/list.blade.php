@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách
                        <small>users</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Role_id</th>
                            <th>Tên</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="text-center">
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->role_id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <?php 
                                    if ($user->is_active == 0) {
                                        echo '<button class="btn btn-sm btn-danger   rounded-0">'."Inactive".'</button>';
                                    }else {
                                        echo '<button class="btn btn-sm btn-success   rounded-0">'."Active".'</button>';
                                    }
                                ?>
                            </td>
                            <td class="d-flex align-items-center justify-content-around">
                            <form action="" method="get">
                                <button class="btn btn-sm btn-primary   rounded-0">
                                Show
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
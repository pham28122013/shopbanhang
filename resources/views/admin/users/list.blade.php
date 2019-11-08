@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Danh sách
                        <small>users</small>
                    </h1>
                </div>
                <div class="col-lg-6">
                    <form action="" method="get">
                        <button class="btn btn-sm btn-primary   rounded-0 new-users">
                            Add new User
                        </button>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Role_id</th>
                            <th>Name</th>
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
                            <td>
                                <?php 
                                    if ($user->role_id == App\Models\User::ROLE_ID['ADMIN'] ) {
                                        echo '<button class="btn btn-sm btn-danger   rounded-0">'."Admin".'</button>';
                                    }elseif ($user->role_id == App\Models\User::ROLE_ID['SUP_ADMIN'] ) {
                                        echo '<button class="btn btn-sm btn-success   rounded-0">'."Sup Admin".'</button>';
                                    }else {
                                        echo '<button class="btn btn-sm btn-primary   rounded-0">'."User".'</button>';
                                    }
                                ?>
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <?php 
                                    if ($user->is_active == App\Models\User::INACTIVE ) {
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
                                <input type="hidden" name="_method" value="delete" /> 
                                {{csrf_field()}}
                                <button class="btn btn-sm btn-danger   rounded-0">
                                Delete
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">{{ $users->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
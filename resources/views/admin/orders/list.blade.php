@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">LIST
                        <small>Order</small>
                    </h1>
                </div>
                <div class="col-lg-6">
                <a href="">
                        <button class="btn btn-sm btn-primary   rounded-0 new-users">
                            Add new User
                        </button>
                </a>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Role</th>
                            <th>Name_Customer</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Note</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="text-center">
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->users->where('role_id')}}</td>
                            <td>{{$order->customer_name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->note}}</td>
                            <td class="d-flex align-items-center justify-content-around">
                            <a href="">
                                <button class="btn btn-sm btn-primary   rounded-0">
                                Show
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-sm btn-warning   rounded-0">
                                Edit
                                </button>
                            </a>
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
                <div class="d-flex justify-content-center">{{ $orders->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách
                        <small>Order</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>User_ID</th>
                            <th>Tên</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Note</th>
                            <th>Order_Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order) 
                            <tr class="text-center">
                                <th scope="row">{{$order->id}}</th>
                                <td>{{$order->user_id}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->note}}</td>
                                <td class="d-flex align-items-center justify-content-around">
                                    <a href="{{route('orderDetails.show', $order->id)}}">
                                        <button class="btn btn-sm btn-primary   rounded-0">
                                        Order_Details
                                        </button>
                                    </a>
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
@extends('admin.dashboards.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách
                        <small>Order_Details</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div style="clear: both;"></div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Order_ID</th>
                            <th>Product_ID</th>
                            <th>Quantity</th>
                            <th>Product_name</th>
                            <th>Code</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $order) 
                            <tr class="text-center">
                                <th scope="row">{{$order->id}}</th>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->product_id}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->code}}</td>
                                <td>{{$order->price}}</td>
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
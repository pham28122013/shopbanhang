@extends('admin.master')
@section('content')
    <!-- Page Content -->
<main class="main">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách
                        <small>hóa đơn</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-bordered table-hover table-striped " >
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    	
                    </tbody>
                </table>
            </div>
            <div class="row">
            	<div class="col-lg-6 row">
            		<table class="table table-bordered info">
            			<thead>
            				<tr>
            					<th colspan="2" class="text-center">Thông Tin Khách Hàng</th>
            				</tr>
            			</thead>
            			<tbody>
            				<tr>
            					<td>Họ tên</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>Số điện thoại</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>Địa chỉ</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>E-mail</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>Ghi chú</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>Ngày</td>
            					<td></td>
            				</tr>
            				<tr>
            					<td>Tổng tiền</td>
            					<td class="total"> VNĐ</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</main>
    <!-- /#page-wrapper -->
@endsection
<style type="text/css">
	table{
		font-size: 14px;
	}
	table.info tr td:first-child{
		font-weight: bold;
	}
	table .total{
		color: blue;
		font-weight: bold;
	}
</style>
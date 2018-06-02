<?php include_once('views/layout/header.php') ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">

	<h1 style="text-align: center">CHI TIẾT ĐƠN HÀNG </h1>
            
<!-- <?php echo "<pre>";
 print_r($_SESSION['TTSP']);
 print_r($_SESSION['TTSP1']);
	echo "</pre>" ?> -->
    <table class="table table-hover">
		<thead>
			<tr>
				<th>INFORMATION</th>
				<th>DETAIL</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>ID</th>
				<td><?php echo $_SESSION['TTKH'][0]['id'] ?></td>
			</tr>
			<tr>
				<th>NAME</th>
				<td><?php echo $_SESSION['TTKH'][0]['name'] ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?php echo $_SESSION['TTKH'][0]['email'] ?></td>
			</tr>
			<tr>
				<th>MOBILE</th>
				<td><?php echo $_SESSION['TTKH'][0]['mobile'] ?></td>
			</tr>
			<tr>
				<th>CREATED_AT</th>
				<td><?php echo $_SESSION['TTKH'][0]['created_at'] ?></td>
			</tr>
			<tr>
				<th>UPDATED_AT</th>
				<td><?php echo $_SESSION['TTKH'][0]['updated_at'] ?></td>
				
			</tr>
			<tr>
				<th>AVATAR</th>
				<td><img src="<?php echo $_SESSION['TTKH'][0]['avatar'] ?>" alt="" class="img-detail-product"></td>
			</tr>
		</tbody>
	</table>


	<h1 style="text-align: center">Sản Phẩm Đã Mua</h1>
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Số lượng</th>
				<th>thành tiền</th>
				<th>sản phẩm</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if(isset($_SESSION['TTSP'])){
				foreach ($_SESSION['TTSP'] as $code => $product) { ?>
			
				<tr>
					<td><?php echo $product['id'] ?></td>
					<td><?php echo $product['name'] ?></td>
					 <td><?php echo number_format($product['price']) ?></td>
					<td><?php echo $product['quantity'] ?></td>
					<td><?php echo number_format($product['price']*$product['quantity']) ; ?></td>
					<td> <img src="<?php echo $product['avatar'] ?>" alt="" class="img-pro"> </td>
					
				</tr>
			<?php } ?>

			
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2"></th>
				<th colspan="2">Tổng tiền</th>
				<th>
					
					<?php
						$tong=0;
						foreach ($_SESSION['TTSP'] as $code => $product){  
							$tong+=$product['price']*$product['quantity'];
						}
						echo number_format($tong);}
					?>
				</th>
					
			</tr>
		</tfoot>
	</table>
	<?php $_SESSION['TTKH'][0]['tongtien']=$tong; ?>
	<a href="?mod=sale&act=sentemail" class="btn btn-info">SENT EMAIL</a>
	<a href="?mod=sale&act=inhoadon&id_bill=<?php echo $_SESSION['TTSP'][0]['id'] ?>" class="btn btn-info">IN HÓA ĐƠN</a>
	<a href="?mod=bill&act=list" class="btn btn-info">Danh Sách Đơn Hàng</a>

        		</div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once('views/layout/footer.php') ?>
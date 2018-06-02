<?php include_once('views/layout/headerCutomer.php') ?>


	<h1 style="text-align: center">CHI TIẾT ĐƠN HÀNG </h1>
            

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
				<td><?php echo $_SESSION['customer']['id'] ?></td>
			</tr>
			<tr>
				<th>NAME</th>
				<td><?php echo  $_SESSION['customer']['name'] ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?php echo  $_SESSION['customer']['email'] ?></td>
			</tr>
			<tr>
				<th>MOBILE</th>
				<td><?php echo  $_SESSION['customer']['mobile'] ?></td>
			</tr>
			<tr>
				<th>CREATED_AT</th>
				<td><?php echo  $_SESSION['customer']['created_at'] ?></td>
			</tr>
			<tr>
				<th>UPDATED_AT</th>
				<td><?php echo  $_SESSION['customer']['updated_at'] ?></td>
				
			</tr>
			<tr>
				<th>AVATAR</th>
				<td><img src="<?php echo  $_SESSION['customer']['avatar'] ?>" alt="" class="img-detail-product"></td>
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
			if(isset($_SESSION['cart'])){
				foreach ($_SESSION['cart'] as $code => $product) { ?>
			
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
						foreach ($_SESSION['cart'] as $code => $product){  
							$tong+=$product['price']*$product['quantity'];
						}
						echo number_format($tong);}
					?>
				</th>
					
			</tr>
		</tfoot>
	</table>
	<?php $_SESSION['customer']['tongtien']=$tong; ?>
	<a href="?mod=bill&act=add2Bill" class="btn btn-info">Xác Nhận Đơn Hàng</a>

        

<?php include_once('views/layout/footerCustomer.php') ?>
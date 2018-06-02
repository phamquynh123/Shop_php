
<?php 
	include('views/layout/header.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<body>
	<div class="container" style="padding-left: 15%">
		<h1 style="text-align: center">Chi Tiết Sản Phẩm</h1>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>INFORMATION</th>
				<th>DETAIL</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>NAME</th>
				<td><?php echo $pro['name'] ?></td>
			</tr>
			<tr>
				<th>QUANTITY</th>
				<td><?php echo $pro['quantity'] ?></td>
			</tr>
			<tr>
				<th>PRICE</th>
				<td><?php echo $pro['price'] ?></td>
			</tr>
			<tr>
				<th>CREATED_AT</th>
				<td><?php echo $pro['created_at'] ?></td>
			</tr>
			<tr>
				<th>UPDATED_AT</th>
				<td><?php echo $pro['updated_at'] ?></td>
				
			</tr>
			<tr>
				<th>IMAGES</th>
				<td><img src="<?php echo $pro['avatar'] ?>" alt="" class="img-detail-product"></td>
			</tr>
		</tbody>
	</table>
	<a href="?mod=products&act=list" class="btn btn-info alist">List Product</a>
	</div>
</body>
</html>
<?php include('views/layout/footer.php') ?>

		
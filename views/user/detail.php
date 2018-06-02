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
		<h1 style="text-align: center">Chi Tiết Người Dùng</h1>
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
				<td><?php echo $user['id'] ?></td>
			</tr>
			<tr>
				<th>NAME</th>
				<td><?php echo $user['name'] ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?php echo $user['email'] ?></td>
			</tr>
			<tr>
				<th>MOBILE</th>
				<td><?php echo $user['mobile'] ?></td>
			</tr>
			<tr>
				<th>CREATED_AT</th>
				<td><?php echo $user['created_at'] ?></td>
			</tr>
			<tr>
				<th>UPDATED_AT</th>
				<td><?php echo $user['updated_at'] ?></td>
			</tr>
			<tr>
				<th>IMAGES</th>
				<td><img src="<?php echo $user['avatar'] ?>" alt="" class="img-detail-product"></td>
			</tr>
		</tbody>
	</table>
	<a href="?mod=users&act=list" class="btn btn-info alist">Danh Sách Khách Hàng</a>
	</div>
</body>
</html>


		
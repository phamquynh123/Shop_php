<?php 
	include('views/layout/header.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product-add</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>q
	<div class="container" style="padding-left: 15%">
		<h1 style="text-align: center">Thêm Mới Sản Phẩm</h1>
	<form action="?mod=products&act=store" method="POST" role="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="name">
		</div>
		<div class="form-group">
			<label for="">Quantity</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="quantity">
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="price">
		</div>
		<div class="form-group">
			<label for="">avatar</label>
			<input type="file" id="" placeholder="Input field" name="avatar"  >
		</div>

		
		<button type="submit" class="btn btn-primary"  name="submit">Submit</button>
	<a href="?mod=products&act=list" class="btn btn-info" >return to product page</a>
	</form>
	</div>
</body>
</html>



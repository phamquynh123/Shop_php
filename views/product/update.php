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
<body>
	<div class="container" style="padding-left: 15%">
		<h1 style="text-align: center"> Sửa thông tin Sản Phẩm</h1>
	<form action="?mod=products&act=update" method="POST" role="form" enctype="multipart/form-data">
		<input type="hidden" class="form-control" id="" placeholder="Input field" name="id"
			value=" <?=  $data['id']?>">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="name" 
			value=" <?=  $data['name']?>">
		</div>
		<div class="form-group">
			<label for="">Quantity</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="quantity"
			value=" <?=  $data['quantity']?>">
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="price"
			value=" <?=  $data['price']?>">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<img src="<?= $data['avatar'] ?> " alt="" class="test">
			<input type="file" class="form-control" id="" placeholder="Input field" name="avatar"
			 value="">
		</div>
	
		<button type="submit" class="btn btn-primary"  name="submit">Submit</button>
	<a href="?mod=products&act=list" class="btn btn-info" >return to product page</a>
	</form>
	</div>
</body>
</html>



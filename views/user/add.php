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
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	 
	<div class="container" style="padding-left: 15%">
		<h1 style="text-align: center">Thêm Mới Người Dùng</h1>
	<form action="?mod=users&act=store" method="POST" role="form" enctype="multipart/form-data"> 
		<div class="form-group">
			<label for="">Name</label><span class="error">* <?php echo $nameErr; ?></span><br>
			<input type="text" class="form-control" id="" placeholder="Input field" name="name" value= "<?php echo $data['name']; ?>">
		</div>
		<div class="form-group">
			<label for="">Email</label><span class="error">* <?php echo $emailErr;?></span><br>
			<input type="text" class="form-control" id="" placeholder="Input field" name="email" value= "<?php echo $data['email']; ?>">
		</div>
		<div class="form-group">
			<label for="">Mobile</label><span class="error">* <?php echo $mobileErr;?></span><br>
			<input type="text" class="form-control" id="" placeholder="Input field" name="mobile" value= "<?php echo $data['mobile']; ?>">
		</div>
		<div class="form-group">
			<label for="">Avatar</label>
			<input type="file" id="" placeholder="Input field" name="avatar"  >
		</div>
	
	
		<button type="submit" class="btn btn-primary"  name="submit">Submit</button>
	<a href="?mod=users&act=list" class="btn btn-info" >return to product page</a>
	</form>
	</div>
</body>
</html>



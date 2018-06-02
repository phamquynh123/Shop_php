<?php 
	include('views/layout/headerCutomer.php');
 ?>


	 
	<!-- <div class="container" style="padding-left: 15%"> -->
		<p class=" btn btn-danger">Vui lòng đăng kí tài khoản để tiếp tục</p>
		<h1 style="text-align: center">Thêm Mới Khách Hàng</h1>
	<form action="?mod=users&act=store1" method="POST" role="form" enctype="multipart/form-data"> 
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
		<a href="?mod=sale&act=cart" class="btn btn-info" >Giỏ Hàng</a>
	</form>
	<!-- </div> -->
<?php 
	include('views/layout/footerCustomer.php');
 ?>



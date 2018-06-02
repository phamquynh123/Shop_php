<?php  include('views/layout/headerCutomer.php'); ?>
 <div style="width:30%; position: absolute; top:60px; right:10px">
        <?php 
            if(isset($_COOKIE['customeradd'])){
         ?>
            <div class="alert alert-success">
          <strong>Success!</strong> BẠN ĐÃ ĐĂNG KÍ THÀNH CÔNG !!!
          NHẬP EMAIL ĐỂ TIẾP TỤC!!!
        </div>
        <?php } ?>

    </div>
     

            	<!-- <div class="container" style="width: 80%"> -->
            		<h1 style="text-align: center">Giỏ Hàng Của Bạn</h1>
                	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên sản phẩm</th>
								<th>Giá tiền</th>
								<th>Số lượng</th>
								<th>thành tiền</th>
								<th>Hành động</th>
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
									<td>
										<a class='btn btn-success' href='?mod=sale&act=add1&id= <?php echo $code ?>'>Xem </a>
										<a class='btn btn-danger delete' href='?mod=sale&act=delete&id=<?php echo $code ?>'> xóa </a>
										<a class='btn btn-info' href='?mod=sale&act=add1&id=<?php echo $code ?> '> + </a>
										<a class='btn btn-danger' href='?mod=sale&act=minus1&id=<?php echo $code ?> '> - </a>
									</td>
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


		<button type="button" class="btn btn-info btn-lg" ><a href="?mod=products&act=customerView" style="color: white" > Xem danh sách sản phẩm</a></button>
		<!-- <button type="button" class="btn btn-info btn-lg" ><a href="?mod=users&act=pay" style="color: white" >THANH TOÁN</a></button> -->
      


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PLEASE ENTER YOUR EMAIL</h4>
        </div>
        <div class="modal-body">
          <form action="?mod=users&act=checkbill" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" id="" placeholder="Input field" name="email">
            </div>

            
            <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
            <a href="?mod=sale&act=cart" class="btn btn-info" >return to cart</a>
          </form>

        </div>
       <!--  <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
  
    </div>
  </div>
      
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> THANH TOÁN</button>


     <script src="public/vendor/jquery/jquery.min.js"></script>
<?php include('views/layout/footerCustomer.php'); ?>


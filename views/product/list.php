<?php  include('views/layout/header.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">
<div style="width:30%; position: absolute; top:10px; right:10px">
        <?php 
            if(isset($_COOKIE[''])){
         ?>
            <div class="alert alert-success">
          <strong>Success!</strong> THÊM VÀO GIỎ HÀNG THÀNH CÔNG!!
        </div>
        <?php } ?>
    </div>
    
            	<!-- <div class="container" style="width: 80%"> -->
            		<h1 style="text-align: center">Danh sách Sản Phẩm</h1>
                	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                		<thead>
                			<tr>
                				<th>ID</th>
                				<th>NAME</th>
                				<th>QUANTITY</th>
                				<th>PRICE</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                				<th>IMAGES</th>
                				<th>ACTION</th>
                			</tr>
                        </thead>
                        <tbody>
                			<?php  
                				foreach ($data as $key => $value) {
                			?>
                				<tr>
                					<td><?php echo $value['id'] ?></td>
                					<td><?php echo $value['name'] ?></td>
                					<td><?php echo $value['quantity'] ?></td>
                					<td><?php echo $value['price'] ?></td>
                					<td><?php echo $value['created_at'] ?></td>
                                    <td><?php echo $value['updated_at'] ?></td>
                                    <td> <img src="<?php echo $value['avatar'] ?>" alt="" class="img-pro"> </td>

                					<td>
                						<a href="?mod=products&act=detail&id=<?php echo$value['id'] ?>" class="btn btn-info"> detail</a>
                						<a href="?mod=products&act=delete&id=<?php echo$value['id'] ?>" class="btn btn-danger delete" > delete</a>
                						<a href="?mod=products&act=edit&id=<?php echo$value['id'] ?>" class="btn btn-success">Update</a>
                							
                					</td>
                				</tr>
                			<?php } ?>
                		</tbody>
                	</table>
                	<a href="?mod=products&act=add" class="btn btn-info"> add </a>
            	<!-- </div> -->






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

     <script src="public/vendor/jquery/jquery.min.js"></script>
  <!--   <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script> -->
<?php include('views/layout/footer.php'); ?>
 


		



		
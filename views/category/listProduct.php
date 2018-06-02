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

                        	<!-- <div class="container" style="width: 80%"> -->
                        		<h1 style="text-align: center">Danh sách Sản Phẩm</h1>
                            	<table class="table table-hover">
                            		<thead>
                            			<tr>
                            				<th>ID</th>
                            				<th>NAME</th>
                            				<th>QUANTITY</th>
                            				<th>PRICE</Th>
                                            <th>CREATED_AT</th>
                            				<th>UPDATED_AT</th>
                            				<th>ACTION</th>
                            			</tr>
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

                            					<td>
                            						<a href="?mod=products&act=detail&id=<?php echo$value['id'] ?>" class="btn btn-info"> detail</a>
                            						<a href="?mod=products&act=delete&id=<?php echo$value['id'] ?>" class="btn btn-danger" > delete</a>
                            						<a href="?mod=products&act=edit&id=<?php echo$value['id'] ?>" class="btn btn-success">Update</a>
                            							
                            					</td>
                            				</tr>
                            			<?php } ?>
                            		</thead>
                            	</table>
                                <a href="?mod=category&act=list" class="btn btn-info">danh mục sản phẩm </a>
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



        <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php include('views/layout/footer.php'); ?>
 


		



		
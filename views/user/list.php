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
            if(isset($_COOKIE['add-customer'])){
         ?>
            <div class="alert alert-success">
          <strong>Success!</strong> THÊM THÔNG TIN KHÁCH HÀNG THÀNH CÔNG !!!
        </div>
        <?php } ?>
         <?php 
            if(isset($_COOKIE['deleteuser'])){
         ?>
            <div class="alert alert-danger">
          <strong>Success!</strong> XÓA THÔNG TIN KHÁCH HÀNG THÀNH CÔNG !!!
        </div>
        <?php } ?>
         <?php 
            if(isset($_COOKIE['updateuser'])){
         ?>
            <div class="alert alert-success">
          <strong>Success!</strong> CẬP NHẬT THÔNG TIN KHÁCH HÀNG THÀNH CÔNG !!!
        </div>
        <?php } ?>

    </div>
            		<h1 style="text-align: center">Danh sách khách hàng</h1>
                	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                		<thead>
                			<tr>
                				<th>ID</th>
                				<th>NAME</th>
                				<th>EMAIL</th>
                				<th>MOBILE</th>
                				<th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>AVATAR</th>
                                <th>STATUS</th>
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
                					<td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['mobile'] ?></td>
                					<td><?php echo $value['created_at'] ?></td>
                                    <td><?php echo $value['updated_at'] ?></td>
                                    <td><img src="<?php echo $value['avatar'] ?>" class="img-custom">
                                        <!-- <?php echo $value['avatar']; ?> --></td>
                                    <td><?php echo $value['status'] ?></td>
                					<td>
                						<a href="?mod=users&act=detail&id=<?php echo$value['id'] ?>" class="btn btn-info"> detail User</a>
                						<a href="?mod=users&act=delete&id=<?php echo$value['id'] ?>" class="btn btn-danger delete"> delete</a>
                						<a href="?mod=users&act=edit&id=<?php echo$value['id'] ?>" class="btn btn-success">Update</a>
                							
                					</td>
                				</tr>
                			<?php } ?>
                		</tbody>
                	</table>
                	<a href="?mod=users&act=add" class="btn btn-info"> add </a>






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




<?php include('views/layout/footer.php'); ?>



		
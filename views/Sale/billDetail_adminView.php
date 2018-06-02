<?php 
	include_once('views/layout/header.php');
?> 
	<div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                		<thead>
                			<tr>
                				<!-- <th>STT</th> -->
                				<th>MÃ ĐƠN HÀNG</th>
                				<th>MÃ KHÁCH HÀNG</th>
                                <th>SỐ LƯỢNG</th>
                				<th>GIÁ TIỀN</th>
                				<th>CREATED_AT</th>
                				<th> ACTION</th>
                			</tr>
                        </thead>
                        <tbody>
                			<?php  
                				foreach ($data as $key => $value) {
                			?>
                				<tr>
                					<td><?php echo $value['id_bill'] ?></td>
                					<td><?php echo $value['id_product'] ?></td>
                                    <td><?php echo $value['quantity'] ?></td>
                					<td><?php echo $value['price'] ?></td>
                					<td><?php echo $value['created_at'] ?></td>
                                    <td>
                						<a href="?mod=users&act=detail&id_bill=<?php echo $value['id_bill'] ?>&id_customer=<?php echo $value['id_customer'] ?>" class="btn btn-info">Detail Bill</a>
                					</td>
                				</tr>
                			<?php } ?>
                		</tbody>
                	</table>
                	<a href="?mod=sale&act=list" class="btn btn-info"> Trở lại </a>

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


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

            		<h1 style="text-align: center">Cửa Hàng Của Bạn</h1>
                    <div style="width:30%; position: absolute; top:10px; right:10px">
                        <?php 
                            if(isset($_COOKIE['ok'])){
                         ?>
                            <div class="alert alert-success">
                          <strong>Success!</strong> THÊM VÀO GIỎ HÀNG THÀNH CÔNG!!
                        </div>
                        <?php } ?>
                    </div>
                <div class="row">
                 <?php  
                        foreach ($data as $key => $value) {
                    ?>
                <div class="col-lg-4">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $value['id'] ?>
                            <?php echo $value['name'] ?>
                        </div>
                        <div class="panel-body">
                            <img src="<?php echo $value['avatar']?>" alt="" class="img-pro">
                        </div>
                        <div class="panel-footer">
                            <!-- <a href="?mod=sale&act=add2cart&id=<?php echo$value['id'] ?>" class="btn btn-info"> Add to Cart</a> -->
                            <a href="#" class="btn btn-info"> Add to Cart</a>

                        </div>
                    </div>
                    
                </div>
               <?php } ?>
            </div>
          


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
<?php include('views/layout/footer.php'); ?>
 


		



		
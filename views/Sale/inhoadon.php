 <?php include_once 'views/layout/header.php'; ?>
 <!-- Page Content -->
<div  class="app sidebar-mini rtl">
	

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <!-- /.panel-heading -->
                            <div class="panel-body">

 
  <?php  print_r($_SESSION['TTKH'][0]) ?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   
    <main class="app-content">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i>QUỲNH <3</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: 01/01/2016</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4 col-md-4">From
                  <address><strong>Zent shop</strong><br>số 2 ngõ trại cá<br>Email: quynhzent@gmail.com</address>
                </div>
                <div class="col-4 col-md-4">To
                  <address><strong>ID: <?php echo $_SESSION['TTKH'][0]['id'] ?></strong><br>
                  	NAME: <?php echo $_SESSION['TTKH'][0]['name'] ?><br>
                  	Phone: <?php echo $_SESSION['TTKH'][0]['mobile'] ?><br>
                  	Email:<?php echo $_SESSION['TTKH'][0]['email'] ?></address>
                </div>
                <div class="col-4 col-md-4"><b>Invoice #007612</b><br><br><b>Order ID:</b> 4F3S8J<br><b>Payment Due:</b> 2/22/2014<br><b>Account:</b> 968-34567</div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">

                  	<table width="100%" class="table table-striped table-bordered table-hover" >
						<thead>
							<tr>
								<th>ID</th>
								<th>Product</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							if(isset($_SESSION['TTSP'])){
								foreach ($_SESSION['TTSP'] as $code => $product) { ?>
							
								<tr>
									<td><?php echo $product['id'] ?></td>
									<td><?php echo $product['name'] ?></td>
									 <td><?php echo number_format($product['price']) ?></td>
									<td><?php echo $product['quantity'] ?></td>
									<td><?php echo number_format($product['price']*$product['quantity']) ; ?></td>
									
								</tr>
							<?php } ?>

							
						</tbody>
						<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2">Total</th>
							<th>
								
								<?php
									$tong=0;
									foreach ($_SESSION['TTSP'] as $code => $product){  
										$tong+=$product['price']*$product['quantity'];
									}
									echo number_format($tong);}
								?>
							</th>
								
						</tr>
		</tfoot>
	</table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                <a href="?mod=products&act=getProduct&id_bill=<?php echo $_SESSION['TTSP'][0]['id'] ?>" class="btn btn-primary">Trở lại</a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
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




 <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
<?php include_once 'views/layout/footer.php'; ?>
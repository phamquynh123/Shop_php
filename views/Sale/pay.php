 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>pay</title>
   <!-- Latest compiled and minified CSS & JS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <script src="//code.jquery.com/jquery.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
    <h1 style="text-align: center">CHI TIẾT ĐƠN HÀNG</h1>
   <table class="table table-hover">
    <thead>
      <tr>
        <th>INFORMATION</th>
        <th>DETAIL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $_SESSION['TTKH'][0]['id'] ?></td>
      </tr>
      <tr>
        <th>NAME</th>
        <td><?php echo $_SESSION['TTKH'][0]['name'] ?></td>
      </tr>
      <tr>
        <th>EMAIL</th>
        <td><?php echo $_SESSION['TTKH'][0]['email'] ?></td>
      </tr>
      <tr>
        <th>MOBILE</th>
        <td><?php echo $_SESSION['TTKH'][0]['mobile'] ?></td>
      </tr>
      <tr>
        <th>CREATED_AT</th>
        <td><?php echo $_SESSION['TTKH'][0]['created_at'] ?></td>
      </tr>
      <tr>
        <th>UPDATED_AT</th>
        <td><?php echo $_SESSION['TTKH'][0]['updated_at'] ?></td>
        
      </tr>
      <tr>
        <th>AVATAR</th>
        <td><img src="<?php echo $_SESSION['TTKH'][0]['avatar'] ?>" alt="" class="img-detail-product"></td>
      </tr>
    </tbody>
  </table>


  <h1 style="text-align: center">Sản Phẩm Đã Mua</h1>
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá tiền</th>
        <th>Số lượng</th>
        <th>thành tiền</th>
        <th>sản phẩm</th>
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
          <td> <img src="<?php echo $product['avatar'] ?>" alt="" class="img-pro"> </td>
          
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
            foreach ($_SESSION['TTSP'] as $code => $product){  
              $tong+=$product['price']*$product['quantity'];
            }
            echo number_format($tong);}
          ?>
        </th>
          
      </tr>
    </tfoot>
  </table>
 </body>
 </html>

 